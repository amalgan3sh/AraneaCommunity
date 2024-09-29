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
        $currentUserId = $session->get("id");
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
        $db = \Config\Database::connect();
        $builder = $db->table('post');
        // Query to get posts of followed users, excluding the current user's posts
    
        // Query to get posts of the current user
        $builder->select('post.*, users.username')
                ->join('users', 'users.id = post.user_id')
                ->where('post.user_id', $currentUserId)  // Only get posts of the current user
                ->orderBy('post.created_at', 'DESC');
        $query = $builder->get();
        
        $data['posts'] = $query->getResultArray();
        
        // Load the user dashboard view
        return view('account/profile',$data);


    }

    public function Profile_edit(){
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.*');
        $builder->where('id',   $session->get('id'));
        $query = $builder->get();
        
        $data['users'] = $query->getResultArray();
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

    
}