<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        if (session()->get('level') !='Admin') {
            return redirect()->to('Login/login');
        }
        // return view('Login/login');
        return view('Admin/Layout/AdminLayout');
    }
}



