<?php
namespace App\Models;

use CodeIgniter\Model;

class LikeModel extends Model
{
    protected $table = 'likes';
    protected $allowedFields = ['post_id', 'user_id'];
    protected $useTimestamps = true;
    protected $validationRules = [
        'post_id' => 'required|integer',
        'user_id' => 'required|integer',
    ];

    public function likeExists($postId, $userId)
    {
        return $this->where('post_id', $postId)->where('user_id', $userId)->first() !== null;
    }

    public function addLike($postId, $userId)
    {
        if (!$this->likeExists($postId, $userId)) {
            return $this->insert(['post_id' => $postId, 'user_id' => $userId]);
        }
        return false; // Or handle as you prefer
    }

     /**
     * Toggle like for a given post and user.
     *
     * @param int $postId
     * @param int $userId
     * @return string 'added' if inserted, 'removed' if deleted
     */
    public function toggleLike($postId, $userId)
    {
        if ($this->likeExists($postId, $userId)) {
            // Like exists, remove it
            $this->where('post_id', $postId)
                 ->where('user_id', $userId)
                 ->delete();
            return 'removed';
        } else {
            // Like does not exist, add it
            $this->insert(['post_id' => $postId, 'user_id' => $userId]);
            return 'added';
        }
    }
}

?>