<?php

namespace App\Controllers\Admin;

use App\Models\Intro_model;
use App\Models\Category_model;
use App\Models\User_model;

class Intro extends BaseController
{
    // index
    public function index()
    {
        checklogin();
        $m_intro   = new intro_model();
        $intro     = $m_intro->detail(1);
        // print_r($intro);die();
        $data = ['title' => 'Thông tin giới thiệu',
            'intro'     => $intro,
            'content'    => 'admin/intro/edit',
        ];
        echo view('admin/layout/wrapper', $data);
    }



    // edit
    public function edit($id_intro)
    {
        checklogin();
        $m_category = new Category_model();
        $m_intro   = new intro_model();
        $category   = $m_category->listing();
        $intro     = $m_intro->detail($id_intro);
        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'name' => 'required',
                'content' => 'required',
            ]
        )) {
            $list = array();
                
                $data = [
                    'id'       => $id_intro,
                    'name'         => $this->request->getVar('name'),
                    'content'     => $this->request->getVar('content'),
                ];

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
                    $data['gallery'] = $str;
               }
               
                // Gallery of project upload
                $m_intro->edit($data);
                return redirect()->to(base_url('admin/intro'))->with('Success', 'Dữ liệu đã lưu thành công');
            }
        
        $data = ['title' => 'Edit intro',
            'intro'     => $intro,
            'content'    => 'admin/intro/edit',
        ];
        echo view('admin/layout/wrapper', $data);
    }
}
