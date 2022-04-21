<?php

namespace App\Controllers\Admin;

use App\Models\News_model;
use App\Models\Category_model;
use App\Models\User_model;

class news extends BaseController
{
    // index
    public function index()
    {
        checklogin();
        $m_news   = new News_model();
        $m_category = new Category_model();
        $news     = $m_news->listing();
        $total      = $m_news->total();

        $data = ['title' => 'Tin tức, Hồ  sơ và dịch vụ (' . $total . ')',
            'news'     => $news,
            'content'    => 'admin/news/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // category
    public function category($id_category)
    {
        checklogin();
        $m_news   = new News_model();
        $m_category = new Category_model();
        $category   = $m_category->detail($id_category);
        $news     = $m_news->category_all($id_category);
        $total      = $m_news->total_category($id_category);

        $data = ['title' => $category['name_category'] . ' (' . $total . ')',
            'news'     => $news,
            'content'    => 'admin/news/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // type_news
    public function type_news($type_news)
    {
        checklogin();
        $m_news   = new News_model();
        $m_category = new Category_model();
        $news     = $m_news->type_news_all($type_news);
        $total      = $m_news->total_type_news($type_news);

        $data = ['title' => $type_news . ' (' . $total . ')',
            'news'     => $news,
            'content'    => 'admin/news/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // status_news
    public function status_news($status_news)
    {
        checklogin();
        $m_news   = new News_model();
        $m_category = new Category_model();
        $category   = $m_category->detail($id_category);
        $news     = $m_news->status_news_all($status_news);
        $total      = $m_news->total_status_news($status_news);

        $data = ['title' => $status_news . ' (' . $total . ')',
            'news'     => $news,
            'content'    => 'admin/news/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // author
    public function author($id_user)
    {
        checklogin();
        $m_news   = new News_model();
        $m_category = new Category_model();
        $m_user     = new User_model();
        $user       = $m_user->detail($id_user);
        $news     = $m_news->author_all($id_user);
        $total      = $m_news->total_author($id_user);

        $data = ['title' => $user['name'] . ' (' . $total . ')',
            'news'     => $news,
            'content'    => 'admin/news/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // add
    public function add()
    {
        checklogin();
        $m_category = new Category_model();
        $m_news   = new News_model();
        $category   = $m_category->listing();

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'type_news' => 'required',
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
                    'id_user'         => $this->session->get('id_user'),
                    'id_category'     => $this->request->getVar('id_category'),
                    'slug_news'     => create_slug($this->request->getVar('title_news')),
                    'type_news'    => $this->request->getVar('type_news'),
                    'title_news'    => $this->request->getVar('title_news'),
                    'summary'       => $this->request->getVar('summary'),
                    'content'             => $this->request->getVar('content'),
                    'status_news'   => $this->request->getVar('status_news'),
                    'type_news'    => $this->request->getVar('type_news'),
                    'keywords'        => $this->request->getVar('keywords'),
                    'icon'            => $this->request->getVar('icon'),
                    'picture'          => $namebaru,
                    'date_post'    => date('Y-m-d H:i:s'),
                    'date_publish' => date('Y-m-d', strtotime($this->request->getVar('date_publish'))) . ' ' . date('H:i', strtotime($this->request->getVar('jam'))),
                ];
                // Gallery of project upload
                $list = array();
                if ($this->request->getFileMultiple('images')) {
 
                    foreach($this->request->getFileMultiple('images') as $file)
                    {   
        
                       $file->move(WRITEPATH . '../assets/upload/image/');
        
                     $temp = [
                       'name' =>  $file->getClientName(),
                       'type'  => $file->getClientMimeType()
                     ];
                    $list[] = $temp['name'];
                     //$save = $db->insert($data);
                     //$msg = 'Files have been successfully uploaded';
                    }
                    $str = implode(",",$list); 
                    $data['list_image'] = $str;
               }
               
                $m_news->add($data);

                return redirect()->to(base_url('admin/news/type_news/' . $this->request->getVar('type_news')))->with('Success', 'Dữ liệu đã lưu thành công');
            }
            $data = [
                'id_user'         => $this->session->get('id_user'),
                'id_category'     => $this->request->getVar('id_category'),
                'slug_news'     => create_slug($this->request->getVar('title_news')),
                'title_news'    => $this->request->getVar('title_news'),
                'type_news'    => $this->request->getVar('type_news'),
                'summary'       => $this->request->getVar('summary'),
                'content'             => $this->request->getVar('content'),
                'status_news'   => $this->request->getVar('status_news'),
                'type_news'    => $this->request->getVar('type_news'),
                'keywords'        => $this->request->getVar('keywords'),
                'icon'            => $this->request->getVar('icon'),
                'date_post'    => date('Y-m-d H:i:s'),
                'date_publish' => date('Y-m-d', strtotime($this->request->getVar('date_publish'))) . ' ' . date('H:i', strtotime($this->request->getVar('jam'))),
            ];
            $m_news->add($data);

            return redirect()->to(base_url('admin/news/type_news/' . $this->request->getVar('type_news')))->with('Success', 'Dữ liệu đã lưu thành công');
        }

        $data = ['title' => 'Add news',
            'category'   => $category,
            'content'    => 'admin/news/add',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // edit
    public function edit($id_news)
    {
        checklogin();
        $m_category = new Category_model();
        $m_news   = new News_model();
        $category   = $m_category->listing();
        $news     = $m_news->detail($id_news);
        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'type_news' => 'required',
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
                    'id_news'       => $id_news,
                    'id_user'         => $this->session->get('id_user'),
                    'id_category'     => $this->request->getVar('id_category'),
                    'slug_news'     => create_slug($this->request->getVar('title_news')),
                    'title_news'    => $this->request->getVar('title_news'),
                    'type_news'    => $this->request->getVar('type_news'),
                    'summary'       => $this->request->getVar('summary'),
                    'content'             => $this->request->getVar('content'),
                    'status_news'   => $this->request->getVar('status_news'),
                    'type_news'    => $this->request->getVar('type_news'),
                    'keywords'        => $this->request->getVar('keywords'),
                    'icon'            => $this->request->getVar('icon'),
                    'picture'          => $namebaru,
                    'date_publish' => date('Y-m-d', strtotime($this->request->getVar('date_publish'))) . ' ' . date('H:i', strtotime($this->request->getVar('jam'))),
                ];
                // Gallery of project upload
                $list = array();
                if ($this->request->getFileMultiple('images')) {
 
                    foreach($this->request->getFileMultiple('images') as $file)
                    {   
        
                       $file->move(WRITEPATH . '../assets/upload/image/');
        
                     $temp = [
                       'name' =>  $file->getClientName(),
                       'type'  => $file->getClientMimeType()
                     ];
                    $list[] = $temp['name'];
                     //$save = $db->insert($data);
                     //$msg = 'Files have been successfully uploaded';
                    }
                    $str = implode(",",$list); 
                    $data['list_image'] = $str;
               }
                $m_news->edit($data);

                return redirect()->to(base_url('admin/news/type_news/' . $this->request->getVar('type_news')))->with('Success', 'Dữ liệu đã lưu thành công');
            }
            $data = [
                'id_news'       => $id_news,
                'id_user'         => $this->session->get('id_user'),
                'id_category'     => $this->request->getVar('id_category'),
                'title_news'    => $this->request->getVar('title_news'),
                'slug_news'     => create_slug($this->request->getVar('title_news')),
                'type_news'    => $this->request->getVar('type_news'),
                'summary'       => $this->request->getVar('summary'),
                'content'             => $this->request->getVar('content'),
                'status_news'   => $this->request->getVar('status_news'),
                'type_news'    => $this->request->getVar('type_news'),
                'keywords'        => $this->request->getVar('keywords'),
                'icon'            => $this->request->getVar('icon'),
                'date_publish' => date('Y-m-d', strtotime($this->request->getVar('date_publish'))) . ' ' . date('H:i', strtotime($this->request->getVar('jam'))),
            ];
            $m_news->edit($data);

            return redirect()->to(base_url('admin/news/type_news/' . $this->request->getVar('type_news')))->with('Success', 'Dữ liệu đã lưu thành công');
        }

        $data = ['title' => 'Edit news: ' . $news['type_news'],
            'category'   => $category,
            'news'     => $news,
            'content'    => 'admin/news/edit',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // Delete
    public function delete($id_news)
    {
        checklogin();
        $m_news = new News_model();
        $data     = ['id_news' => $id_news];
        $m_news->delete($data);
        // masuk database
        $this->session->setFlashdata('Success', 'Dữ liệu đã bị xóa');

        return redirect()->to(base_url('admin/news'));
    }
}
