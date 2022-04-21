<?php

namespace App\Controllers\Admin;

use App\Models\Pages_model;
use App\Models\Category_model;
use App\Models\User_model;

class Pages extends BaseController
{
    // index
    public function index()
    {
        checklogin();
        $m_pages   = new Pages_model();
        $m_category = new Category_model();
        $pages     = $m_pages->listing();
        $total      = $m_pages->total();

        $data = ['title' => 'Trang (' . $total . ')',
            'pages'     => $pages,
            'content'    => 'admin/pages/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }


    // add
    public function add()
    {
        checklogin();
        $m_category = new Category_model();
        $m_pages   = new Pages_model();
        $category   = $m_category->listing();

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'title_pages' => 'required',
            ]
        )) {
                //  database
                $data = [
                    'id_user'         => $this->session->get('id_user'),
                    'slug_pages'     => create_slug($this->request->getVar('title_pages')),
                    'title_pages'    => $this->request->getVar('title_pages'),
                    'summary'       => $this->request->getVar('summary'),
                    'content'             => $this->request->getVar('content'),
                    'keywords'        => $this->request->getVar('keywords'),
                    'show_on_menu'        => $this->request->getVar('show_on_menu'),
                    'show_on_footer'        => $this->request->getVar('show_on_footer'),
                ];
                // Gallery of project upload
               
                $m_pages->add($data);

                return redirect()->to(base_url('admin/pages/'))->with('Success', 'Dữ liệu đã lưu thành công');
        }

        $data = ['title' => 'Add pages',
            'category'   => $category,
            'content'    => 'admin/pages/add',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // edit
    public function edit($id_pages)
    {
        checklogin();
        $m_category = new Category_model();
        $m_pages   = new Pages_model();
        $category   = $m_category->listing();
        $pages     = $m_pages->detail($id_pages);
        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'title_pages' => 'required',
            ]
        )) {
                $data = [
                    'id_pages'       => $id_pages,
                    'id_user'         => $this->session->get('id_user'),
                    'slug_pages'     => create_slug($this->request->getVar('title_pages')),
                    'title_pages'    => $this->request->getVar('title_pages'),
                    'summary'       => $this->request->getVar('summary'),
                    'content'             => $this->request->getVar('content'),
                    'keywords'        => $this->request->getVar('keywords'),
                    'show_on_menu'        => $this->request->getVar('show_on_menu'),
                    'show_on_footer'        => $this->request->getVar('show_on_footer'),
                ];
                // Gallery of project upload
                $m_pages->edit($data);
                return redirect()->to(base_url('admin/pages'))->with('Success', 'Dữ liệu đã lưu thành công');
            }
        
        $data = ['title' => 'Edit pages',
            'pages'     => $pages,
            'content'    => 'admin/pages/edit',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // Delete
    public function delete($id_pages)
    {
        checklogin();
        $m_pages = new Pages_model();
        $data     = ['id_pages' => $id_pages];
        $m_pages->delete($data);
        // masuk database
        $this->session->setFlashdata('Success', 'Dữ liệu đã bị xóa');

        return redirect()->to(base_url('admin/pages'));
    }
}
