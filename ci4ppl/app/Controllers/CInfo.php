<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CInfo extends BaseController
{
    public function index()
    {
        return view('v_info'); // Menampilkan view v_info.php
    }
}
