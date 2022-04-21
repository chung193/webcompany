<?php

namespace App\Controllers\Admin;

use App\Models\category_staff_model;
use App\Models\Staff_model;

class Staff extends BaseController
{
    // mainpage
    public function index()
    {
        checklogin();
        $m_staff          = new Staff_model();
        $m_category_staff = new category_staff_model();
        $staff            = $m_staff->listing();
        $total            = $m_staff->total();
        $category_staff   = $m_category_staff->listing();

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
                $avatar->move(WRITEPATH . '../assets/upload/staff/', $namebaru);
                // Create thumb
                $image = \Config\Services::image()
                    ->withFile(WRITEPATH . '../assets/upload/staff/' . $namebaru)
                    ->fit(100, 100, 'center')
                    ->save(WRITEPATH . '../assets/upload/staff/thumbs/' . $namebaru);
                // masuk database
                // masuk database
                $data = ['id_user'      => $this->session->get('id_user'),
                    'id_category_staff' => $this->request->getPost('id_category_staff'),
                    'name'              => $this->request->getPost('name'),
                    'position'           => $this->request->getPost('position'),
                    'address'            => $this->request->getPost('address'),
                    'phone'           => $this->request->getPost('phone'),
                    'website'           => $this->request->getPost('website'),
                    'email'             => $this->request->getPost('email'),
                    'skill'          => $this->request->getPost('skill'),
                    'picture'            => $namebaru,
                    'status_staff'      => $this->request->getPost('status_staff'),
                    'country'      => $this->request->getPost('country'),
                    'date_of_birth'     => date('Y-m-d', strtotime($this->request->getPost('date_of_birth'))),
                ];
                $m_staff->add($data);
                // masuk database
                $this->session->setFlashdata('success', 'Lưu thay đổi');

                return redirect()->to(base_url('admin/staff'));
            }
            // masuk database
            $data = ['id_user'      => $this->session->get('id_user'),
                'id_category_staff' => $this->request->getPost('id_category_staff'),
                'name'              => $this->request->getPost('name'),
                'position'           => $this->request->getPost('position'),
                'address'            => $this->request->getPost('address'),
                'phone'           => $this->request->getPost('phone'),
                'website'           => $this->request->getPost('website'),
                'email'             => $this->request->getPost('email'),
                'skill'          => $this->request->getPost('skill'),
                // 'picture'		=> $namebaru,
                'status_staff'  => $this->request->getPost('status_staff'),
                'country'  => $this->request->getPost('country'),
                'date_of_birth' => date('Y-m-d', strtotime($this->request->getPost('date_of_birth'))),
            ];
            $m_staff->add($data);
            // masuk database
            $this->session->setFlashdata('success', 'Lưu thay đổi');

            return redirect()->to(base_url('admin/staff'));
        }
        $data = ['title'     => 'Data Staff: ' . $total['total'],
            'staff'          => $staff,
            'category_staff' => $category_staff,
            'content'        => 'admin/staff/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // edit
    public function edit($id_staff)
    {
        checklogin();
        $m_category_staff = new category_staff_model();
        $m_staff          = new Staff_model();
        $staff            = $m_staff->detail($id_staff);
        $category_staff   = $m_category_staff->listing();

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
                $avatar->move(WRITEPATH . '../assets/upload/staff/', $namebaru);
                // Create thumb
                $image = \Config\Services::image()
                    ->withFile(WRITEPATH . '../assets/upload/staff/' . $namebaru)
                    ->fit(100, 100, 'center')
                    ->save(WRITEPATH . '../assets/upload/staff/thumbs/' . $namebaru);
                // masuk database
                // masuk database
                $data = ['id_staff'     => $id_staff,
                    'id_user'           => $this->session->get('id_user'),
                    'id_category_staff' => $this->request->getPost('id_category_staff'),
                    'name'              => $this->request->getPost('name'),
                    'position'           => $this->request->getPost('position'),
                    'address'            => $this->request->getPost('address'),
                    'phone'           => $this->request->getPost('phone'),
                    'website'           => $this->request->getPost('website'),
                    'email'             => $this->request->getPost('email'),
                    'skill'          => $this->request->getPost('skill'),
                    'picture'            => $namebaru,
                    'status_staff'      => $this->request->getPost('status_staff'),
                    'country'      => $this->request->getPost('country'),
                    'date_of_birth'     => date('Y-m-d', strtotime($this->request->getPost('date_of_birth'))),
                ];
                $m_staff->edit($data);
                // masuk database
                $this->session->setFlashdata('success', 'Lưu thay đổi');

                return redirect()->to(base_url('admin/staff'));
            }
            // masuk database
            $data = ['id_staff'     => $id_staff,
                'id_user'           => $this->session->get('id_user'),
                'id_category_staff' => $this->request->getPost('id_category_staff'),
                'name'              => $this->request->getPost('name'),
                'position'           => $this->request->getPost('position'),
                'address'            => $this->request->getPost('address'),
                'phone'           => $this->request->getPost('phone'),
                'website'           => $this->request->getPost('website'),
                'email'             => $this->request->getPost('email'),
                'skill'          => $this->request->getPost('skill'),
                // 'picture'		=> $namebaru,
                'status_staff'  => $this->request->getPost('status_staff'),
                'country'  => $this->request->getPost('country'),
                'date_of_birth' => date('Y-m-d', strtotime($this->request->getPost('date_of_birth'))),
            ];
            $m_staff->edit($data);
            // masuk database
            $this->session->setFlashdata('success', 'Lưu thay đổi');

            return redirect()->to(base_url('admin/staff'));
        }
        $data = ['title'     => 'Edit Data Staff: ' . $staff['name'],
            'staff'          => $staff,
            'category_staff' => $category_staff,
            'content'        => 'admin/staff/edit',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // delete
    public function delete($id_staff)
    {
        checklogin();
        $m_staff = new Staff_model();
        $data    = ['id_staff' => $id_staff];
        $m_staff->delete($data);
        // masuk database
        $this->session->setFlashdata('success', 'Dữ liệu đã xóa');

        return redirect()->to(base_url('admin/staff'));
    }
}
