<?php

namespace App\Controllers;

use App\Models\Config_model;
use App\Models\User_model;

class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    // Homepage
    public function index()
    {
        $session       = \Config\Services::session();
        $m_config = new config_model();
        $m_user        = new User_model();
        $config   = $m_config->listing();

        // Start validate
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'username' => 'required|min_length[3]',
                'password' => 'required|min_length[3]',
            ]
        )) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $user     = $m_user->login($username, $password);
            // Proses login
            if ($user) {
                //  username password 
                $this->session->set('username', $username);
                $this->session->set('id_user', $user['id_user']);
                $this->session->set('access_level', $user['access_level']);
                $this->session->set('name', $user['name']);
                $this->session->setFlashdata('success', 'Hi ' . $user['name'] . ', Bạn đã đăng nhập');

                return redirect()->to(base_url('admin/dashboard'));
            }
            //  username password 
            $this->session->setFlashdata('warning', 'Username hoặc password chưa đúng');

            return redirect()->to(base_url('login'));
        }
        // End validate
        $data = ['title'  => 'Login Administrator',
            'description' => $config['nameweb'] . ', ' . $config['description'],
            'keywords'    => $config['nameweb'] . ', ' . $config['keywords'],
            'session'     => $session,
        ];
        echo view('login/index', $data);

        // End proses
    }

    // quên mật khẩu
    public function forgot()
    {
        $session       = \Config\Services::session();
        $m_config = new config_model();
        $m_user        = new User_model();
        $config   = $m_config->listing();

        $data = ['title'  => 'Quên Password',
            'description' => $config['nameweb'] . ', ' . $config['description'],
            'keywords'    => $config['nameweb'] . ', ' . $config['keywords'],
            'session'     => $session,
        ];
        echo view('login/forgot', $data);
    }

    // Logout
    public function logout()
    {
        $this->session->destroy();

        return redirect()->to(base_url('login?logout=success'));
    }
}
