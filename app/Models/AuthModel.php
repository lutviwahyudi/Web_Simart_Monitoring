<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'users';
    protected $primary_key = 'id';
    protected $allowedFields = ['username', 'email', 'password'];
}