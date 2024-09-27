<?php

namespace App\Models;

use CodeIgniter\Model;

class FollowersModel extends Model
{
    protected $table = 'followers';
    protected $primaryKey = ['followerId', 'followedId'];
    protected $allowedFields = ['followerId', 'followedId', 'followedAt'];
    protected $useTimestamps = true;
    protected $createdField = 'followedAt';

    // Method to follow a user
    public function followUser($followerId, $followedId)
    {
        return $this->insert([
            'followerId' => $followerId,
            'followedId' => $followedId,
            'followedAt' => date('Y-m-d H:i:s')
        ]);
    }

    // Method to unfollow a user
    public function unfollowUser($followerId, $followedId)
    {
        return $this->where('followerId', $followerId)
                    ->where('followedId', $followedId)
                    ->delete();
    }

    // Method to get followers of a user
    public function getFollowers($userId)
    {
        return $this->select('followerId')
                    ->where('followedId', $userId)
                    ->findAll();
    }

    // Method to get users a user is following
    public function getFollowing($userId)
    {
        return $this->select('followedId')
                    ->where('followerId', $userId)
                    ->findAll();
    }
}