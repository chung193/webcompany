<?php

namespace App\Controllers\Admin;

use App\Models\category_staff_model;

class category_staff extends BaseController
{
    // mainpage
    public function index()
    {
        checklogin();
        $m_category_staff = new category_staff_model();
        $category_staff   = $m_category_staff->listing();
        $total            = $m_category_staff->total();

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'name_category_staff' => 'required|min_length[3]|is_unique[category_staff.name_category_staff]',
            ]
        )) {
            // masuk database
            $slug = url_title($this->request->getPost('name_category_staff'), '-', true);
            $data = ['id_user'        => $this->session->get('id_user'),
                'name_category_staff' => $this->request->getPost('name_category_staff'),
                'slug_category_staff' => $slug,
                'urutan'              => $this->request->getPost('urutan'),
            ];
            $m_category_staff->save($data);
            // masuk database
            $this->session->setFlashdata('sukses', 'Lưu thay đổi');

            return redirect()->to(base_url('admin/category_staff'));
        }
        $data = ['title'     => 'category Staff: ' . $total['total'],
            'category_staff' => $category_staff,
            'content'        => 'admin/category_staff/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // edit
    public function edit($id_category_staff)
    {
        checklogin();
        $m_category_staff = new category_staff_model();
        $category_staff   = $m_category_staff->detail($id_category_staff);
        $total            = $m_category_staff->total();

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'name_category_staff' => 'required|min_length[3]',
            ]
        )) {
            // masuk database
            $slug = url_title($this->request->getPost('name_category_staff'), '-', true);
            $data = ['id_user'        => $this->session->get('id_user'),
                'name_category_staff' => $this->request->getPost('name_category_staff'),
                'slug_category_staff' => $slug,
                'urutan'              => $this->request->getPost('urutan'),
            ];
            $m_category_staff->update($id_category_staff, $data);
            // masuk database
            $this->session->setFlashdata('sukses', 'Lưu thay đổi');

            return redirect()->to(base_url('admin/category_staff'));
        }
        $data = ['title'     => 'Edit category Staff: ' . $category_staff['name_category_staff'],
            'category_staff' => $category_staff,
            'content'        => 'admin/category_staff/edit',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // delete
    public function delete($id_category_staff)
    {
        checklogin();
        $m_category_staff = new category_staff_model();
        $data             = ['id_category_staff' => $id_category_staff];
        $m_category_staff->delete($data);
        // masuk database
        $this->session->setFlashdata('sukses', 'Data telah dihapus');

        return redirect()->to(base_url('admin/category_staff'));
    }
}
