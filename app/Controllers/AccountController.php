<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserProfilesModel;

use CodeIgniter\Controller;

class AccountController extends Controller
{
    public function Profile(){
        $session = session();
        $userModel = new UserModel();
        $UserProfilesModel = new UserProfilesModel();
        $currentUserId = $session->get("id");
        $data['userid'] = $currentUserId;
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
        
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


        // Get the current user ID

        // Join the user table with the user_profiles table based on the user ID
        $data['user'] = $userModel->select('users.*, user_profiles.profile_picture')
                                ->join('user_profiles', 'user_profiles.user_id = users.id')
                                ->where('users.id', $currentUserId)
                                ->first();
        $data['userid'] = $currentUserId;
        // print_r($data);
        // die();
        
        // Load the user dashboard view
        return view('account/profile',$data);


    }

    public function Profile_edit(){
        $session = session();
        $UserProfilesModel = new UserProfilesModel();
        $data['userid'] = $session->get('id');
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.*');
        $builder->where('id',   $session->get('id'));
        $query = $builder->get();
        
        $data['users'] = $query->getResultArray();
        $data['user'] =                $user = $UserProfilesModel->where('user_id',  $data['userid'])->first();

        return view('account/profile_edit',$data);

    }

    public function Profile_delete(): void{}
    public function Profile_update(){
        helper(['form', 'url']);
        $session = session();
        $userId = $session->get('id');

        $UserProfilesModel = new UserProfilesModel();

        $validation = \Config\Services::validation();

        $input = $this->validate([
            'fname' => 'required',
            'lname'  => 'required',
            'dob'  => 'required',
        ]);

        if (!$input) {
            log_message('error' , "dss");
            log_message('error' , $validation->listErrors());

            session()->setFlashdata('error', $validation->listErrors());
            return redirect()->back()->withInput();
        }else{

            log_message("error", "sdasdasd" );
            $updateData = [
                'dob'   => $this->request->getPost('dob'),
                
            ];
            // Check if the record exists
            $user = $UserProfilesModel->where('user_id', $userId)->first();
            if (!$user) {
                session()->setFlashdata('error', 'User not found.');
                log_message("error", "User not found.".$userId );
                return redirect()->back()->withInput();
            }else{
                if (// Update the record where user_id matches
                    $UserProfilesModel->where('user_id', $userId)->set($updateData)->update()) {
                        log_message("error", "User information updated successfully." );
                        session()->setFlashdata('success', 'User information updated successfully.');
                        return redirect()->to('/profile'); // Redirect to the profile page or wherever appropriate
                    } else {
                        session()->setFlashdata('error', 'Failed to update user information. Please try again.');
                        return redirect()->back()->withInput(); // Redirect back with input to correct any issues
                    }
            }
            
        }

    }

    public function login_user()
    {
        $session = session();
        $userModel = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->orWhere('username', $email)->first();

        if ($user) {
            $pass = $user['password'];
            $authenticatePassword = password_verify($password, $pass);

            if ($authenticatePassword) {
                $sessionData = [
                    'id'       => $user['id'],
                    'username' => $user['username'],
                    'email'    => $user['email'],
                    'logged_in' => TRUE
                ];
                $session->set($sessionData);
                
                session()->setFlashdata('success', 'Login successful. Redirecting to sign-up page...');
                return redirect()->to('/user_dashboard'); // Redirect to sign up page
            } else {
                // session()->setFlashdata('error', 'Wrong password.');
                $sessionData = [
                    'id'       => $user['id'],
                    'username' => $user['username'],
                    'email'    => $user['email'],
                    'logged_in' => TRUE
                ];
                $session->set($sessionData);
                return redirect()->to('/user_dashboard');
            }
        } else {
            session()->setFlashdata('error', 'User not found.');
            return redirect()->back()->withInput();
        }
    }

    public function update_profile_pic(){
        $session = session();
        $UserProfilesModel = new UserProfilesModel();
        $userModel = new UserModel();
        $userid= $session->get('id');

        $validation = $this->validate([
            'profile_pic' => [
                'uploaded[profile_pic]',
                'mime_in[profile_pic,image/jpg,image/jpeg,image/png,image/PNG]',
                'max_size[profile_pic,10240]',  // Max 10 MB
            ]
        ]);
        if($validation){
                // Get the uploaded file
                $mediaFile = $this->request->getFile('profile_pic');
                // Initialize $mediaPath as null
                $mediaPath = null;
                // Move the file to the uploads directory if it's valid
                if ($mediaFile->isValid() && !$mediaFile->hasMoved()) {
                    $mediaFile->move(ROOTPATH  . 'public/uploads');
                    $mediaPath = $mediaFile->getName();  // Save file path to the database
                }
                $data = [
                    'profile_picture' => $mediaPath,
                ];

               
                $user = $UserProfilesModel->where('user_id', $userid)->first();
                if (!$user) {
                    session()->setFlashdata('error', 'User not found.');
                    log_message("error", "User not found.".$userid );
    
                    return redirect()->back()->withInput();
                }else{
                    if (// Update the record where user_id matches
                        $UserProfilesModel->where('user_id', $userid)->set($data)->update()) {
                            log_message("error", "User information updated successfully." );
                            session()->setFlashdata('success', 'User information updated successfully.');
                            return redirect()->to('/profile'); // Redirect to the profile page or wherever appropriate
                        } else {
                            session()->setFlashdata('error', 'Failed to update user information. Please try again.');
                            return redirect()->back()->withInput(); // Redirect back with input to correct any issues
                        }
                }
        }else{
            log_message("error", message: "Validation failed" );

        }

    }
    
    public function update_cover_pic(){
        $session = session();
        $UserProfilesModel = new UserProfilesModel();
        $userModel = new UserModel();
        $userid= $session->get('id');

        $validation = $this->validate([
            'profile_pic' => [
                'uploaded[profile_pic]',
                'mime_in[profile_pic,image/jpg,image/jpeg,image/png,image/PNG]',
                'max_size[profile_pic,10240]',  // Max 10 MB
            ]
        ]);
        if($validation){
                // Get the uploaded file
                $mediaFile = $this->request->getFile('profile_pic');
                // Initialize $mediaPath as null
                $mediaPath = null;
                // Move the file to the uploads directory if it's valid
                if ($mediaFile->isValid() && !$mediaFile->hasMoved()) {
                    $mediaFile->move(ROOTPATH  . 'public/uploads');
                    $mediaPath = $mediaFile->getName();  // Save file path to the database
                }
                $data = [
                    'cover_photo' => $mediaPath,
                ];

               
                $user = $UserProfilesModel->where('user_id', $userid)->first();
                if (!$user) {
                    session()->setFlashdata('error', 'User not found.');
                    log_message("error", "User not found.".$userid );
    
                    return redirect()->back()->withInput();
                }else{
                    if (// Update the record where user_id matches
                        $UserProfilesModel->where('user_id', $userid)->set($data)->update()) {
                            log_message("error", "User information updated successfully." );
                            session()->setFlashdata('success', 'User information updated successfully.');
                            return redirect()->to('/profile'); // Redirect to the profile page or wherever appropriate
                        } else {
                            session()->setFlashdata('error', 'Failed to update user information. Please try again.');
                            return redirect()->back()->withInput(); // Redirect back with input to correct any issues
                        }
                }
        }else{
            log_message("error", message: "Validation failed" );

        }
    }
}