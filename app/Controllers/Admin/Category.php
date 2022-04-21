<?php

namespace App\Controllers\Admin;

use App\Models\Category_model;

class category extends BaseController
{
    // mainpage
    public function index()
    {
        checklogin();
        $m_category = new Category_model();
        $category   = $m_category->listing();
        $total      = $m_category->total();

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'name_category' => 'required|min_length[3]|is_unique[category.name_category]',
            ]
        )) {
            // masuk database
            $slug = url_title($this->request->getPost('name_category'), '-', true);
            $data = ['id_user'  => $this->session->get('id_user'),
                'name_category' => $this->request->getPost('name_category'),
                'slug_category' => create_slug($slug),
                'order'        => $this->request->getPost('order'),
            ];
            $m_category->save($data);
            // masuk database
            $this->session->setFlashdata('sukses', 'Lưu thay đổi');

            return redirect()->to(base_url('admin/category'));
        }
        $data = ['title' => 'Danh mục tin tức, Hồ sơ &amp; Dịch vụ ' . $total['total'],
            'category'   => $category,
            'content'    => 'admin/category/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // edit
    public function edit($id_category)
    {
        checklogin();
        $m_category = new Category_model();
        $category   = $m_category->detail($id_category);
        $total      = $m_category->total();

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'name_category' => 'required|min_length[3]',
            ]
        )) {
            // masuk database
            $slug = url_title($this->request->getPost('name_category'), '-', true);
            $data = ['id_user'  => $this->session->get('id_user'),
                'name_category' => $this->request->getPost('name_category'),
                'slug_category' => create_slug($slug),
                'order'        => $this->request->getPost('order'),
            ];
            $m_category->update($id_category, $data);
            // masuk database
            $this->session->setFlashdata('success', 'Lưu thay đổi');

            return redirect()->to(base_url('admin/category'));
        }
        $data = ['title' => 'Edit category news: ' . $category['name_category'],
            'category'   => $category,
            'content'    => 'admin/category/edit',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // delete
    public function delete($id_category)
    {
        checklogin();
        $m_category = new Category_model();
        $data       = ['id_category' => $id_category];
        $m_category->delete($data);
        // masuk database
        $this->session->setFlashdata('success', 'Dữ liệu đã được xóa');

        return redirect()->to(base_url('admin/category'));
    }
}
