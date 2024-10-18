<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'username', 'first_name', 'last_name', 'email', 'phone_number',
        'password', 'user_type', 'status', 'reset_token', 'token_expiration', 'remember_token', 'created_at', 'updated_at'
    ];

    protected $beforeInsert = ['beforeInsert'];

    protected function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function passwordHash(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }
}