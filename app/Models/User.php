<?php

namespace App\Models;

use CodeIgniter\Model;

Class User extends Model {
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'address',
        'pincode',
        'mobile_number',
        'email_id',
        'gender',
        'language',
        'status',
        'created',
        'modified',
        'image',
        'city',
        'state',

    ];
}
?>