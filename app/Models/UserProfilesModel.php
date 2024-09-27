<?php

namespace App\Models;

use CodeIgniter\Model;

class UserProfilesModel extends Model
{
    protected $table      = 'user_profiles';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'dob', 'company_name', 'street_addr_1', 'street_addr_2', 'phone_number', 'alt_phone_number', 'country', 'state', 'city',
        'pin_code', 'facebook_url', 'instagram_url', 'twitter_url', 'linkdin_url', 'user_id',  'created_at', 'updated_at'
    ];

    

    
}