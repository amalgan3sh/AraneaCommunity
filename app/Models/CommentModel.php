<?php
namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'id';

    protected $allowedFields = ['post_id', 'user_id', 'content'];
    protected $useTimestamps = true;

    // Function to delete a comment by ID
    public function deleteCommentById($commentId)
    {
        // Ensure the ID exists before attempting to delete
        return $this->delete($commentId) !== false;
    }
}
?>