<?php

namespace App\Controllers\Admin;

use App\Models\gallery_model;
use App\Models\category_gallery_model;

class gallery extends BaseController
{
    // index
    public function index()
    {
        checklogin();
        $m_gallery          = new gallery_model();
        $m_category_gallery = new category_gallery_model();
        $gallery            = $m_gallery->listing();
        $total             = $m_gallery->total();

        $data = ['title' => 'gallery và Banner (' . $total . ')',
            'gallery'     => $gallery,
            'content'    => 'admin/gallery/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // add
    public function add()
    {
        checklogin();
        $m_gallery          = new gallery_model();
        $m_category_gallery = new category_gallery_model();
        $category_gallery   = $m_category_gallery->listing();

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'title_gallery' => 'required',
                'picture' => [
                    'uploaded[picture]',
                    'mime_in[picture,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[picture,4096]',
                ],
            ]
        )) {
            if (! empty($_FILES['picture']['name'])) {
                // Image upload
                $avatar   = $this->request->getFile('picture');
                $namebaru = str_replace(' ', '-', $avatar->getName());
                $avatar->move(WRITEPATH . '../assets/upload/image/', $namebaru);
                // Create thumb
                $image = \Config\Services::image()
                    ->withFile(WRITEPATH . '../assets/upload/image/' . $namebaru)
                    ->fit(100, 100, 'center')
                    ->save(WRITEPATH . '../assets/upload/image/thumbs/' . $namebaru);
                // masuk database
                $data = [
                    'id_user'            => $this->session->get('id_user'),
                    'id_category_gallery' => $this->request->getVar('id_category_gallery'),
                    'title_gallery'       => $this->request->getVar('title_gallery'),
                    'type_gallery'       => $this->request->getVar('type_gallery'),
                    'content'                => $this->request->getVar('content'),
                    'picture'             => $namebaru,
                    'website'            => $this->request->getVar('website'),
                    'status_text'        => $this->request->getVar('status_text'),
                    'date_post'       => date('Y-m-d H:i:s'),
                ];
                $m_gallery->add($data);

                return redirect()->to(base_url('admin/gallery'))->with('success', 'Thành công');
            }
            $data = [
                'id_user'            => $this->session->get('id_user'),
                'id_category_gallery' => $this->request->getVar('id_category_gallery'),
                'title_gallery'       => $this->request->getVar('title_gallery'),
                'type_gallery'       => $this->request->getVar('type_gallery'),
                'content'                => $this->request->getVar('content'),
                'website'            => $this->request->getVar('website'),
                'status_text'        => $this->request->getVar('status_text'),
                'date_post'       => date('Y-m-d H:i:s'),
            ];
            $m_gallery->add($data);

            return redirect()->to(base_url('admin/gallery'))->with('success', 'Thành công');
        }

        $data = ['title'      => 'add gallery',
            'category_gallery' => $category_gallery,
            'content'         => 'admin/gallery/add',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // edit
    public function edit($id_gallery)
    {
        checklogin();
        $m_category_gallery = new category_gallery_model();
        $m_gallery          = new gallery_model();
        $category_gallery   = $m_category_gallery->listing();
        $gallery            = $m_gallery->detail($id_gallery);
        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'title_gallery' => 'required',
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
                $avatar->move(WRITEPATH . '../assets/upload/image/', $namebaru);
                // Create thumb
                $image = \Config\Services::image()
                    ->withFile(WRITEPATH . '../assets/upload/image/' . $namebaru)
                    ->fit(100, 100, 'center')
                    ->save(WRITEPATH . '../assets/upload/image/thumbs/' . $namebaru);
                // masuk database
                $data = [
                    'id_gallery'          => $id_gallery,
                    'id_user'            => $this->session->get('id_user'),
                    'id_category_gallery' => $this->request->getVar('id_category_gallery'),
                    'title_gallery'       => $this->request->getVar('title_gallery'),
                    'type_gallery'       => $this->request->getVar('type_gallery'),
                    'content'                => $this->request->getVar('content'),
                    'picture'             => $namebaru,
                    'website'            => $this->request->getVar('website'),
                    'status_text'        => $this->request->getVar('status_text'),
                ];
                $m_gallery->edit($data);

                return redirect()->to(base_url('admin/gallery'))->with('success', 'Thành công');
            }
            $data = [
                'id_gallery'          => $id_gallery,
                'id_user'            => $this->session->get('id_user'),
                'id_category_gallery' => $this->request->getVar('id_category_gallery'),
                'title_gallery'       => $this->request->getVar('title_gallery'),
                'type_gallery'       => $this->request->getVar('type_gallery'),
                'content'                => $this->request->getVar('content'),
                'website'            => $this->request->getVar('website'),
                'status_text'        => $this->request->getVar('status_text'),
            ];
            $m_gallery->edit($data);

            return redirect()->to(base_url('admin/gallery'))->with('success', 'Thành công');
        }

        $data = ['title'      => 'Edit gallery: ' . $gallery['title_gallery'],
            'category_gallery' => $category_gallery,
            'gallery'          => $gallery,
            'content'         => 'admin/gallery/edit',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // Delete
    public function delete($id_gallery)
    {
        checklogin();
        $m_gallery = new gallery_model();
        $data     = ['id_gallery' => $id_gallery];
        $m_gallery->delete($data);
        // masuk database
        $this->session->setFlashdata('success', 'Dữ liệu đã được xóa');

        return redirect()->to(base_url('admin/gallery'));
    }
}
