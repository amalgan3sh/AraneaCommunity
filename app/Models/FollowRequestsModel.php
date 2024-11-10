<?php

namespace App\Models;

use CodeIgniter\Model;

class FollowRequestsModel extends Model
{
    protected $table = 'follow_requests';
    protected $primaryKey = 'requestId';
    protected $allowedFields = ['followerId', 'followedId', 'status'];
    protected $useTimestamps = true;
    protected $createdField  = 'createdAt';
    protected $updatedField  = 'updatedAt';
    // Method to send a follow request
    public function sendFollowRequest($followerId, $followedId)
    {
        // Check if a request already exists
        $existingRequest = $this->where('followerId', $followerId)
                                ->where('followedId', $followedId)
                                ->whereIn('status', ['pending', 'accepted']) // Prevent duplicate requests
                                ->first();

        if ($existingRequest) {
            return false; // Request or follow relationship already exists
        }

        // Insert new follow request with pending status
        return $this->insert([
            'followerId' => $followerId,
            'followedId' => $followedId,
            'status'     => 'pending',
        ]) !== false;
    }

    // Method to approve a follow request
    public function approveFollowRequest($requestId)
    {
        $request = $this->find($requestId);
        if ($request && $request['status'] === 'pending') {
            // Move relationship to `followers` table
            $followersModel = new FollowersModel();
            $followersModel->insert([
                'followerId' => $request['followerId'],
                'followedId' => $request['followedId']
            ]);

            // Update request status to 'accepted'
            return $this->update($requestId, ['status' => 'accepted']);
        }
        return false;
    }

    // Method to reject a follow request
    public function rejectFollowRequest($requestId)
    {
        return $this->update($requestId, ['status' => 'rejected']);
    }

    // Method to check follow status
    public function getFollowStatus($followerId, $followedId)
    {
        return $this->where('followerId', $followerId)
                    ->where('followedId', $followedId)
                    ->first();
    }
     // Get incoming follow requests for a user
     public function getIncomingRequests($userId)
     {
         return $this->where('followedId', $userId)
                     ->where('status', 'pending')
                     ->findAll();
     }
 
     // Get outgoing follow requests from a user
     public function getOutgoingRequests($userId)
     {
         return $this->where('followerId', $userId)
                     ->where('status', 'pending')
                     ->findAll();
     }


    // Fetch incoming follow requests with profile picture and mutual friends
    public function getIncomingRequestsWithDetails($userId)
    {
        return $this->select('follow_requests.*, users.username, user_profiles.profile_picture')
                    ->join('users', 'users.id = follow_requests.followerId')
                    ->join('user_profiles', 'user_profiles.user_id = follow_requests.followerId')

                    ->where('follow_requests.followedId', $userId)
                    ->where('follow_requests.status', 'pending')
                    ->findAll();
    }

    // Fetch outgoing follow requests with profile picture and mutual friends
    public function getOutgoingRequestsWithDetails($userId)
    {
        return $this->select('follow_requests.*, users.username, users.profile_picture')
                    ->join('users', 'users.user_id = follow_requests.followedId')
                    ->where('follow_requests.followerId', $userId)
                    ->where('follow_requests.status', 'pending')
                    ->findAll();
    }

    // Count mutual friends between two users
    // Count mutual followers between two users
    public function getMutualFollowersCount($userId1, $userId2)
    {
        $db = \Config\Database::connect();
        
        $builder = $db->table('followers AS f1')
                      ->join('followers AS f2', 'f1.followerId = f2.followerId')
                      ->where('f1.followedId', $userId1)
                      ->where('f2.followedId', $userId2);
        
        $mutualFollowers = $builder->countAllResults();

        return $mutualFollowers;
    }

    // Method to cancel a follow request
    public function cancelFollowRequest($followerId, $followedId)
    {
        return $this->where('followerId', $followerId)
                    ->where('followedId', $followedId)
                    ->where('status', 'pending')  // Only allow canceling pending requests
                    ->delete();
    }

}

?>