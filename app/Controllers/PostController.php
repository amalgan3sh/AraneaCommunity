<?php

namespace App\Controllers;

use App\Models\PostModel;
use CodeIgniter\Controller;

class PostController extends Controller
{
    public function create_post()
    {
        $session = session();
        $userId = $session->get('id');  // Get the logged-in user's ID

        // Get the content from the form input
        $content = $this->request->getPost('content');

        if ($content) {
            $postModel = new PostModel();

            $data = [
                'user_id' => $userId,
                'content' => $content,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];

            $postModel->save($data);

            return redirect()->to('/user_dashboard'); // Redirect to the posts page after submitting
        } else {
            // Handle the case where content is empty
            return redirect()->back()->with('error', 'Post content cannot be empty.');
        }
    }

}