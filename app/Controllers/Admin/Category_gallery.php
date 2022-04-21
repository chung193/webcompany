<?php

namespace App\Controllers\Admin;

use App\Models\category_gallery_model;

class category_gallery extends BaseController
{
    // mainpage
    public function index()
    {
        checklogin();
        $m_category_gallery = new category_gallery_model();
        $category_gallery   = $m_category_gallery->listing();
        $total             = $m_category_gallery->total();

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'name_category_gallery' => 'required|min_length[3]|is_unique[category_gallery.name_category_gallery]',
            ]
        )) {
            // masuk database
            $slug = url_title($this->request->getPost('name_category_gallery'), '-', true);
            $data = ['id_user'         => $this->session->get('id_user'),
                'name_category_gallery' => $this->request->getPost('name_category_gallery'),
                'slug_category_gallery' => $slug,
                'order'               => $this->request->getPost('order'),
            ];
            $m_category_gallery->save($data);
            // masuk database
            $this->session->setFlashdata('Success', 'Lưu thay đổi');

            return redirect()->to(base_url('admin/category_gallery'));
        }
        $data = ['title'      => 'category gallery: ' . $total['total'],
            'category_gallery' => $category_gallery,
            'content'         => 'admin/category_gallery/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // edit
    public function edit($id_category_gallery)
    {
        checklogin();
        $m_category_gallery = new category_gallery_model();
        $category_gallery   = $m_category_gallery->detail($id_category_gallery);
        $total             = $m_category_gallery->total();

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'name_category_gallery' => 'required|min_length[3]',
            ]
        )) {
            // masuk database
            $slug = url_title($this->request->getPost('name_category_gallery'), '-', true);
            $data = ['id_user'         => $this->session->get('id_user'),
                'name_category_gallery' => $this->request->getPost('name_category_gallery'),
                'slug_category_gallery' => $slug,
                'order'               => $this->request->getPost('order'),
            ];
            $m_category_gallery->update($id_category_gallery, $data);
            // masuk database
            $this->session->setFlashdata('Success', 'Lưu thay đổi');

            return redirect()->to(base_url('admin/category_gallery'));
        }
        $data = ['title'      => 'Edit category gallery: ' . $category_gallery['name_category_gallery'],
            'category_gallery' => $category_gallery,
            'content'         => 'admin/category_gallery/edit',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // delete
    public function delete($id_category_gallery)
    {
        checklogin();
        $m_category_gallery = new category_gallery_model();
        $data              = ['id_category_gallery' => $id_category_gallery];
        $m_category_gallery->delete($data);
        // masuk database
        $this->session->setFlashdata('Success', 'Data telah dihapus');

        return redirect()->to(base_url('admin/category_gallery'));
    }
}
