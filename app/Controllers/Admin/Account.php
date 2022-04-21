<?php

namespace App\Controllers\Admin;

use App\Models\User_model;

class Account extends BaseController
{
    public function index()
    {
        checklogin();
        $id_user = $this->session->get('id_user');
        $m_user  = new User_model();
        $user    = $m_user->detail($id_user);

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'id_user' => 'required',
                'picture' => [
                    'mime_in[picture,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[picture,4096]',
                ],
            ]
        )) {
            if (! empty($_FILES['picture']['name'])) {
                // Image upload
                $avatar   = $this->request->getFile('picture');
                $namebaru = $avatar->getRandomName();
                $avatar->move(WRITEPATH . '../assets/upload/image/', $namebaru);
                // Create thumb
                $image = \Config\Services::image()
                    ->withFile(WRITEPATH . '../assets/upload/image/' . $namebaru)
                    ->fit(100, 100, 'center')
                    ->save(WRITEPATH . '../assets/upload/image/thumbs/' . $namebaru);
                // masuk database
                // masuk database
                if (strlen($this->request->getPost('password')) >= 6 && strlen($this->request->getPost('password')) <= 32) {
                    $data = ['name' => $this->request->getPost('name'),
                        'email'     => $this->request->getPost('email'),
                        'username'  => $this->request->getPost('username'),
                        'password'  => sha1($this->request->getPost('password')),
                        'picture'    => $namebaru,
                    ];
                } else {
                    $data = ['name' => $this->request->getPost('name'),
                        'email'     => $this->request->getPost('email'),
                        'username'  => $this->request->getPost('username'),
                        'picture'    => $namebaru,
                    ];
                }
            } else {
                // masuk database
                if (strlen($this->request->getPost('password')) >= 6 && strlen($this->request->getPost('password')) <= 32) {
                    $data = ['name' => $this->request->getPost('name'),
                        'email'     => $this->request->getPost('email'),
                        'username'  => $this->request->getPost('username'),
                        'password'  => sha1($this->request->getPost('password')),
                    ];
                } else {
                    $data = ['name' => $this->request->getPost('name'),
                        'email'     => $this->request->getPost('email'),
                        'username'  => $this->request->getPost('username'),
                    ];
                }
            }
            $m_user->update($id_user, $data);
            // masuk database
            $this->session->setFlashdata('Success', 'Lưu thay đổi');

            return redirect()->to(base_url('admin/account'));
        }
        $data = ['title' => 'Update Profile: ' . $user['name'],
            'user'       => $user,
            'content'    => 'admin/account/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }
}
