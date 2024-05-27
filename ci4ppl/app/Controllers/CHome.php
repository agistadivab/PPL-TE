<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CHome extends BaseController
{
    public function index()
    {
        return view('v_home'); // Menampilkan view v_home.php
    }
}
