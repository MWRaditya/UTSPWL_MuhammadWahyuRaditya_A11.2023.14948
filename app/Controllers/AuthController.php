<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    function __construct()
    {
        helper('form');
    }

    public function login()
    {
        if ($this->request->getPost()) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
    
            // Example users with plain passwords (these should be hashed in a real scenario)
            $dataUsers = [
                [
                    'username' => 'april',
                    'password' => '123', // Plain password
                    'role' => 'admin'
                ],
                [
                    'username' => 'john',
                    'password' => '456', // Plain password
                    'role' => 'user'
                ],
            ];
    
            // Check credentials
            $userFound = false;
    
            foreach ($dataUsers as $user) {
                if ($username === $user['username']) {
                    $userFound = true;
    
                    // Hash the password only for comparison within the loop
                    if (password_verify($password, password_hash($user['password'], PASSWORD_DEFAULT))) {
                        session()->set([
                            'username' => $user['username'],
                            'role' => $user['role'],
                            'isLoggedIn' => true
                        ]);
    
                        return redirect()->to(base_url('/'));
                    } else {
                        session()->setFlashdata('failed', 'Password Salah');
                        return redirect()->back()->withInput();
                    }
                }
            }
    
            if (!$userFound) {
                session()->setFlashdata('failed', 'Username Tidak Ditemukan');
            }
    
            return redirect()->back()->withInput();
        }
    
        return view('v_login');
    }
    

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
