<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('Login/login');
    }

    public function loginProcess()
    {
        $session = session();
        $model = new UsersModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            

            $session->set([
                'isLoggedIn' => true,
                'username'   => $user['username'],
                'level'       => $user['level']
            ]);
    
            // Redirect berdasarkan level
            switch ($user['level']) {
                case 'Admin':
                    return redirect()->to('/Admin');
                case 'kasir':
                    return redirect()->to('/kasir/dashboard');
                case 'User':
                    return redirect()->to('/Kategori');
                default:
                    return redirect()->to('Login/login');
            }
        } else {
            return redirect()->back()->with('error', 'Login gagal!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
