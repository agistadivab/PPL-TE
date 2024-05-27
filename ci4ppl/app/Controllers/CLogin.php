<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CLogin extends BaseController
{
    public function index()
    {
        return view('v_login');
    }
}
