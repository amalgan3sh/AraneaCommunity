<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AccountController extends Controller
{
    public function Profile(){
        $session = session();
        $userModel = new UserModel();

        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
        $db = \Config\Database::connect();
        $builder = $db->table('post');
        $builder->select('post.*, users.username');
        $builder->join('users', 'users.id = post.user_id');
        $builder->orderBy('post.created_at', 'DESC');
        $query = $builder->get();
        
        $data['posts'] = $query->getResultArray();
        
        // Load the user dashboard view
        return view('account/profile',$data);


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