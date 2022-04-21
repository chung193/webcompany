<?php

namespace App\Controllers\Admin;

use App\Models\Client_model;

class Client extends BaseController
{
    // mainpage
    public function index()
    {
        checklogin();
        $m_client = new Client_model();
        $client   = $m_client->listing();
        $total    = $m_client->total();

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'name' => 'required',
                'picture' => [
                    'mime_in[picture,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[picture,4096]',
                ],
            ]
        )) {
            if (! empty($_FILES['picture']['name'])) {
                // Image upload
                $avatar   = $this->request->getFile('picture');
                $namebaru = str_replace(' ', '-', $avatar->getName());
                $avatar->move(WRITEPATH . '../assets/upload/client/', $namebaru);
                // Create thumb
                $image = \Config\Services::image()
                    ->withFile(WRITEPATH . '../assets/upload/client/' . $namebaru)
                    ->fit(100, 100, 'center')
                    ->save(WRITEPATH . '../assets/upload/client/thumbs/' . $namebaru);
                // masuk database
                // masuk database
                $data = ['id_user'  => $this->session->get('id_user'),
                    'type_client'  => $this->request->getPost('type_client'),
                    'name'          => $this->request->getPost('name'),
                    'leader'      => $this->request->getPost('leader'),
                    'address'        => $this->request->getPost('address'),
                    'phone'       => $this->request->getPost('phone'),
                    'website'       => $this->request->getPost('website'),
                    'email'         => $this->request->getPost('email'),
                    'testimonial' => $this->request->getPost('testimonial'),
                    'picture'        => $namebaru,
                    'status_client' => $this->request->getPost('status_client'),
                    'country'  => $this->request->getPost('country'),
                    'date_of_birth' => date('Y-m-d', strtotime($this->request->getPost('date_of_birth'))),
                    'date_post'  => date('Y-m-d H:i:s'),
                ];
                $m_client->add($data);
                // masuk database
                $this->session->setFlashdata('sukses', 'Lưu thay đổi');

                return redirect()->to(base_url('admin/client'));
            }
            // masuk database
            $data = ['id_user'  => $this->session->get('id_user'),
                'type_client'  => $this->request->getPost('type_client'),
                'name'          => $this->request->getPost('name'),
                'leader'      => $this->request->getPost('leader'),
                'address'        => $this->request->getPost('address'),
                'phone'       => $this->request->getPost('phone'),
                'website'       => $this->request->getPost('website'),
                'email'         => $this->request->getPost('email'),
                'testimonial' => $this->request->getPost('testimonial'),
                // 'picture'		=> $namebaru,
                'status_client' => $this->request->getPost('status_client'),
                'country'  => $this->request->getPost('country'),
                'date_of_birth' => date('Y-m-d', strtotime($this->request->getPost('date_of_birth'))),
                'date_post'  => date('Y-m-d H:i:s'),
            ];
            $m_client->add($data);
            // masuk database
            $this->session->setFlashdata('sukses', 'Lưu thay đổi');

            return redirect()->to(base_url('admin/client'));
        }
        $data = ['title' => 'Data Client: ' . $total['total'],
            'client'     => $client,
            'content'    => 'admin/client/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // edit
    public function edit($id_client)
    {
        checklogin();
        $m_client = new Client_model();
        $client   = $m_client->detail($id_client);

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'name' => 'required',
                'picture' => [
                    'mime_in[picture,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[picture,4096]',
                ],
            ]
        )) {
            if (! empty($_FILES['picture']['name'])) {
                // Image upload
                $avatar   = $this->request->getFile('picture');
                $namebaru = str_replace(' ', '-', $avatar->getName());
                $avatar->move(WRITEPATH . '../assets/upload/client/', $namebaru);
                // Create thumb
                $image = \Config\Services::image()
                    ->withFile(WRITEPATH . '../assets/upload/client/' . $namebaru)
                    ->fit(100, 100, 'center')
                    ->save(WRITEPATH . '../assets/upload/client/thumbs/' . $namebaru);
                // masuk database
                // masuk database
                $data = ['id_client' => $id_client,
                    'id_user'        => $this->session->get('id_user'),
                    'type_client'   => $this->request->getPost('type_client'),
                    'name'           => $this->request->getPost('name'),
                    'leader'       => $this->request->getPost('leader'),
                    'address'         => $this->request->getPost('address'),
                    'phone'        => $this->request->getPost('phone'),
                    'website'        => $this->request->getPost('website'),
                    'email'          => $this->request->getPost('email'),
                    'testimonial'  => $this->request->getPost('testimonial'),
                    'picture'         => $namebaru,
                    'status_client'  => $this->request->getPost('status_client'),
                    'country'   => $this->request->getPost('country'),
                    'date_of_birth'  => date('Y-m-d', strtotime($this->request->getPost('date_of_birth'))),
                ];
                $m_client->edit($data);
                // masuk database
                $this->session->setFlashdata('sukses', 'Data telah dcontentmpan');

                return redirect()->to(base_url('admin/client'));
            }
            // masuk database
            $data = ['id_client' => $id_client,
                'id_user'        => $this->session->get('id_user'),
                'type_client'   => $this->request->getPost('type_client'),
                'name'           => $this->request->getPost('name'),
                'leader'       => $this->request->getPost('leader'),
                'address'         => $this->request->getPost('address'),
                'phone'        => $this->request->getPost('phone'),
                'website'        => $this->request->getPost('website'),
                'email'          => $this->request->getPost('email'),
                'testimonial'  => $this->request->getPost('testimonial'),
                // 'picture'		=> $namebaru,
                'status_client' => $this->request->getPost('status_client'),
                'country'  => $this->request->getPost('country'),
                'date_of_birth' => date('Y-m-d', strtotime($this->request->getPost('date_of_birth'))),
            ];
            $m_client->edit($data);
            // masuk database
            $this->session->setFlashdata('sukses', 'Data telah dcontentmpan');

            return redirect()->to(base_url('admin/client'));
        }
        $data = ['title' => 'Edit Data Client: ' . $client['name'],
            'client'     => $client,
            'content'    => 'admin/client/edit',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // delete
    public function delete($id_client)
    {
        checklogin();
        $m_client = new Client_model();
        $data     = ['id_client' => $id_client];
        $m_client->delete($data);
        // masuk database
        $this->session->setFlashdata('sukses', 'Data đã xóa thành công');

        return redirect()->to(base_url('admin/client'));
    }
}
