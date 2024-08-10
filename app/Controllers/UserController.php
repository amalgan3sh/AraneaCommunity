<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\PostModel;

class UserController extends Controller
{
    public function user_dashboard()
    {
        $session = session();
        $userModel = new UserModel();


        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
        $data['activeUsers'] = $userModel->where('status', 'active')->findAll();
        $data['suggestedUsers'] = $userModel->findAll(3);

        $postModel = new PostModel();
        $data['posts'] = $postModel->orderBy('created_at', 'DESC')->findAll();
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
}