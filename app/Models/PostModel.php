<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'content', 'media_path', 'created_at', 'updated_at'];
    protected $useTimestamps = false; // We manually handle timestamps

    // Optionally, define the fields used for timestamps
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Fetch posts with likes and comments
    public function getPostsWithInteractions()
    {
        return $this->select('posts.*, COUNT(likes.id) as like_count')
            ->join('likes', 'likes.post_id = posts.id', 'left')
            ->groupBy('posts.id')
            ->findAll();
    }
}