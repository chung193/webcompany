<?php

namespace App\Controllers\Admin;

use App\Models\intro_model;
use App\Models\Category_model;
use App\Models\User_model;

class Intro extends BaseController
{
    public function index()
    {
        checklogin();
        $m_intro   = new intro_model();
        $intro     = $m_intro->detail(1);
        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'name' => 'required',
                'content' => 'required',
            ]
        )) {
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
            
                $data = [
                    'id'       => $id_intro,
                    'name'         => $this->request->getVar('name'),
                    'content'     => $this->request->getVar('content'),
                ];
                if(!empty($name)){
                    $data['picture'] = $name;
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

    // Delete
    public function delete($id_intro)
    {
        checklogin();
        $m_intro = new intro_model();
        $data     = ['id' => $id_intro];
        $m_intro->delete($data);
        // masuk database
        $this->session->setFlashdata('Success', 'Dữ liệu đã bị xóa');

        return redirect()->to(base_url('admin/intro'));
    }
}
