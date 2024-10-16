<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\PostModel;
use App\Models\FollowersModel;
use App\Models\UserProfilesModel;


class UserController extends Controller
{
    public function user_dashboard()
    {
        $session = session();
        $FollowersModel = new FollowersModel();
        $userModel = new UserModel();
        $UserProfilesModel = new UserProfilesModel();


        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
        $data['activeUsers'] = $userModel->where('status', 'active')->findAll();
        $data['userid'] = $session->get('id');

        // Step 1: Get all users (you can adjust the limit as needed)
        $allUsers = $userModel->findAll();

        // Step 2: Get follower IDs
        
        $followerIds = $FollowersModel->where('followerId',   $data['userid'])
                                    ->findColumn('followedId');
            if(!$followerIds){
                $followerIds = array($data['userid']);
            }
            array_push($followerIds, $data['userid']);

        // Step 3: Filter out already followed users
        $data['suggestedUsers'] = array_filter($allUsers, function($user) use ($followerIds) {
            return !in_array($user['id'], $followerIds);
        });

        $postModel = new PostModel();
        
        // Fetch posts with the username
        $db = \Config\Database::connect();
        $builder = $db->table('post');
       // Query to get posts of followed users and the current user
        $builder->select('post.*, users.username, users.first_name, user_profiles.profile_picture')
        ->join('users', 'users.id = post.user_id')                // Join with 'users' table to get the username
        ->join('followers', 'followers.followedId = post.user_id', 'left') // Left join to include current user's posts
        ->join('user_profiles', 'users.id = user_profiles.user_id')
        ->groupStart()                                            // Grouping conditions for followed users and current user
            ->where('followers.followerId', $data['userid'])      // Posts from followed users
            ->orWhere('post.user_id', $data['userid'])            // Include posts by the current user
        ->groupEnd()
        ->orderBy('post.created_at', 'DESC');                     // Order by creation date (newest first)

        $query = $builder->get();
        
        $data['posts'] = $query->getResultArray();
        // print_r($data['posts']);
        // die();
        $data['user'] =     $user = $UserProfilesModel->where('user_id',  $data['userid'])->first();
        
        // Load the user dashboard view
        return view('user/user_dashboard',$data);
    }

    public function active_users()
    {
        $userModel = new UserModel();

        // Assuming 'status' is used to indicate whether a user is active or not
        $activeUsers = $userModel->where('status', 'active')->findAll();

        // Pass the active users to the view
        return view('users/active_users', ['activeUsers' => $activeUsers]);
    }

    public function view_followers()
    {
        $session = session();
        $FollowersModel = new FollowersModel();
        $UserProfilesModel = new UserProfilesModel();

        $userid = $session->get('id');
        // Joining the followers table with the users table to get follower names
        $data['followers'] = $FollowersModel
        ->select('*')
        ->join('users', 'followers.followedId = users.id')
        ->where('followers.followerId', $userid)
        ->findAll();
        $data['user'] =     $user = $UserProfilesModel->where('user_id',  $userid)->first();

        // Pass the active users to the view
        return view('user/friends_list',    $data);
    }

    public function follow($followerId, $followedId)
    {
        $followersModel = new FollowersModel();
        
        if ($followersModel->followUser($followerId, $followedId)) {
            return json_encode(['message' => 'Successfully followed the user.']);
        }
        log_message('error', 'bbbb');
    
        return json_encode(['message' => 'Failed to follow the user.']);
    }

    public function unfollow($followerId, $followedId)
    {
        $followersModel = new FollowersModel();
        
        if ($followersModel->unfollowUser($followerId, $followedId)) {
            return json_encode(['message' => 'Successfully unfollowed the user.']);
        }
        
        return json_encode(['message' => 'Failed to unfollow the user.']);
    }

    public function getFollowers($userId)
    {
        $followersModel = new FollowersModel();
        $followers = $followersModel->getFollowers($userId);
        
        return json_encode($followers);
    }

    public function getFollowing($userId)
    {
        $followersModel = new FollowersModel();
        $following = $followersModel->getFollowing($userId);
        
        return json_encode($following);
    }
}