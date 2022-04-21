<?php

namespace App\Controllers\Admin;

use App\Models\config_model;

class Config extends BaseController
{
    // mainpage
    public function index()
    {
        checklogin();
        $m_config  = new config_model();
        $config    = $m_config->listing();
        $id_config = $config['id_config'];
        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'nameweb' => 'required|min_length[3]',
            ]
        )) {
            // masuk database
            $data = ['id_config' => $config['id_config'],
                'id_user'             => $this->session->get('id_user'),
                'nameweb'             => $this->request->getPost('nameweb'),
                'shorthand'           => $this->request->getPost('shorthand'),
                'tagline'             => $this->request->getPost('tagline'),
                'intro'             => $this->request->getPost('intro'),
                'description'           => $this->request->getPost('description'),
                'website'             => $this->request->getPost('website'),
                'email'               => $this->request->getPost('email'),
                'email_backup'      => $this->request->getPost('email_backup'),
                'address'              => $this->request->getPost('address'),
                'phone'             => $this->request->getPost('phone'),
                'fax'                  => $this->request->getPost('fax'),
                'facebook'            => $this->request->getPost('facebook'),
                'twitter'             => $this->request->getPost('twitter'),
                'instagram'           => $this->request->getPost('instagram'),
                'youtube'             => $this->request->getPost('youtube'),
                'name_facebook'       => $this->request->getPost('name_facebook'),
                'name_twitter'        => $this->request->getPost('name_twitter'),
                'name_instagram'      => $this->request->getPost('name_instagram'),
                'name_youtube'        => $this->request->getPost('name_youtube'),
                'google_map'          => $this->request->getPost('google_map'),
                'whatwedo'          => $this->request->getPost('whatwedo'),
                'cultura_activiti'          => $this->request->getPost('cultura_activiti'),
                'slogan'          => $this->request->getPost('slogan'),
            ];
            $m_config->edit($data);
            // masuk database
            $this->session->setFlashdata('sukses', 'Data telah diupdate');

            return redirect()->to(base_url('admin/config'));
        }
        $data = ['title'  => 'config Website',
            'config' => $config,
            'content'     => 'admin/config/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // seo
    public function seo()
    {
        checklogin();
        $m_config  = new config_model();
        $config    = $m_config->listing();
        $id_config = $config['id_config'];
        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'id_config' => 'required',
            ]
        )) {
            // masuk database
            $data = ['id_config' => $config['id_config'],
                'id_user'             => $this->session->get('id_user'),
                'keywords'            => $this->request->getPost('keywords'),
                'metatext'            => $this->request->getPost('metatext'),
            ];
            $m_config->edit($data);
            // masuk database
            $this->session->setFlashdata('sukses', 'Data telah diupdate');

            return redirect()->to(base_url('admin/config/seo'));
        }
        $data = ['title'  => 'config SEO Website',
            'config' => $config,
            'content'     => 'admin/config/seo',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // logo
    public function logo()
    {
        checklogin();
        $m_config  = new config_model();
        $config    = $m_config->listing();
        $id_config = $config['id_config'];
        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate([
            'id_config' => 'required',
            'logo' => [
                'uploaded[logo]',
                'mime_in[logo,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[logo,4096]',
            ],
        ])) {
            // Image upload
            $avatar   = $this->request->getFile('logo');
            $namebaru = $avatar->getName();
            $avatar->move(WRITEPATH . '../assets/upload/image/', $namebaru);
            // Create thumb
            $image = \Config\Services::image()
                ->withFile(WRITEPATH . '../assets/upload/image/' . $namebaru)
                ->fit(100, 100, 'center')
                ->save(WRITEPATH . '../assets/upload/image/thumbs/' . $namebaru);
            // masuk database
            $data = ['id_config' => $config['id_config'],
                'id_user'             => $this->session->get('id_user'),
                'logo'                => $namebaru,
            ];
            $m_config->edit($data);
            // masuk database
            $this->session->setFlashdata('sukses', 'Data telah diupdate');

            return redirect()->to(base_url('admin/config/logo'));
        }
        // End validasi
        $data = ['title'  => 'Update Logo Website',
            'config' => $config,
            'content'     => 'admin/config/logo',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // icon
    public function icon()
    {
        checklogin();
        $m_config  = new config_model();
        $config    = $m_config->listing();
        $id_config = $config['id_config'];
        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate([
            'id_config' => 'required',
            'icon' => [
                'uploaded[icon]',
                'mime_in[icon,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[icon,4096]',
            ],
        ])) {
            // Image upload
            $avatar   = $this->request->getFile('icon');
            $namebaru = $avatar->getName();
            $avatar->move(WRITEPATH . '../assets/upload/image/', $namebaru);
            // Create thumb
            $image = \Config\Services::image()
                ->withFile(WRITEPATH . '../assets/upload/image/' . $namebaru)
                ->fit(100, 100, 'center')
                ->save(WRITEPATH . '../assets/upload/image/thumbs/' . $namebaru);
            // masuk database
            $data = ['id_config' => $config['id_config'],
                'id_user'             => $this->session->get('id_user'),
                'icon'                => $namebaru,
            ];
            $m_config->edit($data);
            // masuk database
            $this->session->setFlashdata('sukses', 'Data telah diupdate');

            return redirect()->to(base_url('admin/config/icon'));
        }
        // End validasi
        $data = ['title'  => 'Update Icon Website',
            'config' => $config,
            'content'     => 'admin/config/icon',
        ];
        echo view('admin/layout/wrapper', $data);
    }
}
