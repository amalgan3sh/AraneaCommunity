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
     /*   $db = \Config\Database::connect();
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
        
        $data['posts'] = $query->getResultArray(); */

        $db = \Config\Database::connect();
$builder = $db->table('post');

// Query to get posts of followed users and the current user, along with like count
$builder->select('
        post.*, 
        users.username, 
        users.first_name, 
        user_profiles.profile_picture, 
        COUNT(DISTINCT likes.id) AS like_count
    ')
    ->join('users', 'users.id = post.user_id')               // Join with 'users' table to get username
    ->join('followers', 'followers.followedId = post.user_id', 'left') // Left join to include current user's posts
    ->join('user_profiles', 'users.id = user_profiles.user_id')
    ->join('likes', 'likes.post_id = post.id', 'left')       // Join with 'likes' table for like count
    ->groupStart()                                           // Group conditions for followed users and current user
        ->where('followers.followerId', $data['userid'])     // Posts from followed users
        ->orWhere('post.user_id', $data['userid'])           // Include posts by the current user
    ->groupEnd()
    ->groupBy('post.id')                                     // Group by post id to aggregate likes
    ->orderBy('post.created_at', 'DESC');                    // Order by creation date (newest first)

$query = $builder->get();
$data['posts'] = $query->getResultArray();

$commentBuilder = $db->table('comments');
$commentBuilder->select('
        comments.post_id, 
        comments.content AS comment_content, 
        comments.created_at AS comment_created_at, 
        users.username AS comment_username, 
        user_profiles.profile_picture AS comment_profile_picture
    ')
    ->join('users', 'users.id = comments.user_id')           // Join with 'users' to get comment user details
    ->join('user_profiles', 'user_profiles.user_id = users.id')
    ->whereIn('comments.post_id', array_column($data['posts'], 'id')) // Only get comments for displayed posts
    ->orderBy('comments.created_at', 'ASC');                 // Order comments by creation date

$commentQuery = $commentBuilder->get();
$comments = $commentQuery->getResultArray();


// Initialize comments array for each post
foreach ($data['posts'] as &$post) {
    $post['comments'] = [];
}

// Group comments by post_id
foreach ($comments as $comment) {
    foreach ($data['posts'] as &$post) {
        if ($post['id'] == $comment['post_id']) {
            $post['comments'][] = $comment;
        }
    }
}


        // echo "<pre>";
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

    public function sentresetmail()
    {
        $email = $this->request->getPost('email');
        $userModel = new UserModel();  // Assuming you have a UserModel for user management
        
        // Check if the email exists in the users table
        $user = $userModel->where('email', $email)->first();
        
        if ($user) {
            // Logic to send the reset mail goes here
            // e.g., calling a helper function to send the email
            // Generate a unique reset token
            $resetToken = bin2hex(random_bytes(32));  // Generate a 64-character token

            // Set the token expiration time (optional), e.g., valid for 1 hour
            $expiration = date('Y-m-d H:i:s', strtotime('+1 hour'));
            log_message('error', 'expire time : '.$expiration);

            // Save the reset token and expiration time in the database (assuming user has `reset_token` and `token_expiration` fields)
            $userModel->update($user['id'], [
                'reset_token' => $resetToken,
                'token_expiration' => $expiration
            ]);

            // Send reset email with the token
            $this->sendResetEmail($email, $resetToken);

            return json_encode(['message' => 'Reset email has been sent to.'.$email]);
        } else {
            return json_encode(['message' => 'Email does not exist.']);
        }
    }

    private function sendResetEmail($email, $token)
    {
        // Construct the reset URL (adjust base URL if necessary)
        $resetLink = base_url() . '/reset_password/' . $token;  // Include userId and token in the link

        // Load the email library (in CodeIgniter 4 or adjust if using another version)
        $emailService = \Config\Services::email();

        $emailService->setTo($email);
        $emailService->setFrom('majid.n0202@gmail.com', 'Your Application Name');
        $emailService->setSubject('Password Reset Request');
        $emailService->setMessage("
            <p>Dear user,</p>
            <p>You have requested to reset your password. Please click the link below to reset it:</p>
            <a href='$resetLink'>Reset Password</a>
            <p>This link will expire in 1 hour.</p>
        ");

        // Send the email
        if ($emailService->send()) {
            return true;
        } else {
            // Log email error (optional)
            log_message('error', $emailService->printDebugger(['headers']));
            return false;
        }
    }


}