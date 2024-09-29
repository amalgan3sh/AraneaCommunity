<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\PostModel;
use App\Models\FollowersModel;

class UserController extends Controller
{
    public function user_dashboard()
    {
        $session = session();
        $FollowersModel = new FollowersModel();
        $userModel = new UserModel();



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
        array_push($followerIds, $data['userid']);

    // Step 3: Filter out already followed users
    $data['suggestedUsers'] = array_filter($allUsers, function($user) use ($followerIds) {
        return !in_array($user['id'], $followerIds);
    });

        $postModel = new PostModel();
        // Fetch posts with the username
        $db = \Config\Database::connect();
        $builder = $db->table('post');
       // Query to get posts of followed users, excluding the current user's posts
        $builder->select('post.*, users.username')
        ->join('users', 'users.id = post.user_id')
        ->join('followers', 'followers.followedId = post.user_id')
        ->where('followers.followerId', $data['userid'])  // Only get posts of followed users
        ->where('post.user_id !=', $data['userid'])       // Exclude posts of the current user
        ->orderBy('post.created_at', 'DESC');
        $query = $builder->get();
        
        $data['posts'] = $query->getResultArray();
        
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
        $userid = $session->get('id');
        // Joining the followers table with the users table to get follower names
        $followers = $FollowersModel
        ->select('*')
        ->join('users', 'followers.followedId = users.id')
        ->where('followers.followerId', $userid)
        ->findAll();

        // Pass the active users to the view
        return view('user/friends_list', ['followers' => $followers]);
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