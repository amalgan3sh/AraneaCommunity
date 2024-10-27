<?php

namespace App\Controllers;

use App\Models\PostModel;
use App\Models\LikeModel;
use App\Models\CommentModel;


use CodeIgniter\Controller;

class PostController extends Controller
{
    public function create_post()
    {
        $session = session();
        $userId = $session->get('id');  // Get the logged-in user's ID
        $postModel = new PostModel();

        // Get the content from the form input
        $content = $this->request->getPost('content');
        $validation = $this->validate([
            'media' => [
                'uploaded[media]',
                'mime_in[media,image/jpg,image/jpeg,image/png,image/PNG,video/mp4,video/mpeg]',
                'max_size[media,10240]',  // Max 10 MB
            ]
        ]);
        if($validation){
            if ($content) {
                // Get the uploaded file
                $mediaFile = $this->request->getFile('media');
                // Initialize $mediaPath as null
                $mediaPath = null;
                // Move the file to the uploads directory if it's valid
                if ($mediaFile->isValid() && !$mediaFile->hasMoved()) {
                    $mediaFile->move(ROOTPATH  . 'public/uploads');
                    $mediaPath = $mediaFile->getName();  // Save file path to the database
                }
                $data = [
                    'user_id' => $userId,
                    'content' => $content,
                    'media_path' => $mediaPath,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ];
    
                $postModel->save($data);
    
                return redirect()->to('/user_dashboard'); // Redirect to the posts page after submitting
            } else {
                    log_message('error', 'Post cannot empty error.');

                // Handle the case where content is empty
                return redirect()->back()->with('error', 'Post content cannot be empty.');
            }
        }else{
            if($content){
                $data = [
                    'user_id' => $userId,
                    'content' => $content,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ];
    
                $postModel->save($data);
    
                return redirect()->to('/user_dashboard'); // Redirect to the posts page after submitting
            }
            


            log_message('error', 'Validation error.');
            return redirect()->back()->with('error', 'Post content cannot be empty (media).');

        }
        
    }

    public function like()
    {
        $likeModel = new LikeModel();

        $postId = $this->request->getPost('post_id');
        $userId = session()->get('id');

        // Add like to database (pseudo code)
        $likeModel = new LikeModel();
        $likeModel->toggleLike(postId: $postId, userId: $userId);

        // Return updated like count
        $likeCount = $likeModel->where('post_id', $postId)->countAllResults();
        return $this->response->setJSON(['like_count' => $likeCount]);
    }

    public function comment()
    {
        $postId = $this->request->getPost('post_id');
        $userId = session()->get('id');
        $content = $this->request->getPost('content');

        // Add comment to database
        $commentModel = new CommentModel();
        $commentId = $commentModel->insert([
            'post_id' => $postId,
            'user_id' => $userId,
            'content' => $content
        ]);

        // Fetch the comment details with username and profile picture
    $db = \Config\Database::connect();
    $builder = $db->table('comments');
    $builder->select('
        comments.content, 
        comments.created_at, 
        users.username, 
        user_profiles.profile_picture
    ')
    ->join('users', 'users.id = comments.user_id')
    ->join('user_profiles', 'user_profiles.user_id = users.id')
    ->where('comments.id', $commentId);

    $query = $builder->get();
    $newComment = $query->getRowArray();

    return $this->response->setJSON($newComment);
    }


}