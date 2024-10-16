<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserProfilesModel;

use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function RegisterUser()
    {
        helper(['form', 'url']);

        $validation = \Config\Services::validation();

        $input = $this->validate([
            'username'   => 'required|is_unique[users.username]',
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|valid_email|is_unique[users.email]',
            'phone_number' => 'required|numeric',
            'password'   => 'required|min_length[6]',
            'terms'      => 'required',
            'dob'   =>  'required'
        ]);

        if (!$input) {
            session()->setFlashdata('error', $validation->listErrors());
            return redirect()->back()->withInput();
        } else {
            $userModel = new UserModel();
            $UserProfilesModel = new UserProfilesModel();

            $userData = [
                'username'   => $this->request->getPost('username'),
                'first_name' => $this->request->getPost('first_name'),
                'last_name'  => $this->request->getPost('last_name'),
                'email'      => $this->request->getPost('email'),
                'phone_number' => $this->request->getPost('phone_number'),
                'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'user_type'  => 'standard',
                'status'     => 'active',
                'created_at' => date('Y-m-d H:i:s'),
            ];
            // echo json_encode($userData);
            // die();

            if ($userModel->save($userData)) {
                $insertID = $userModel->getInsertID();
                $userprofile = [
                    'dob'   =>  $this->request->getPost('dob'),
                    'user_id'   =>  $insertID
                ];
                if($UserProfilesModel->save($userprofile)){
                    session()->setFlashdata('success', 'Registration successful. Please login.');
                    return redirect()->to('/');
                }
                
            } else {
                session()->setFlashdata('error', 'An error occurred while registering. Please try again.');
                return redirect()->back()->withInput();
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

    public function Logout(){
        // Get the session instance
        $session = session();

        // Remove all session data
        $session->destroy();

        // Redirect to the login or home page
        return redirect()->to('/');
    }
}