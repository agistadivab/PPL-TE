<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['username', 'password'];

    public function auth($user)
    {
        $db = \Config\Database::connect();
        $username = $user['username'];
        $password = $user ['password'];
        $user = $db->query("SELECT * FROM user WHERE username = '$username' and password ='$password'");
        $user = $user->getRow();
        return  $user;
    }
}
