<?php

namespace App\Controllers\Admin;

use App\Models\Activity_model;
use App\Models\Category_model;
use App\Models\User_model;

class Activity extends BaseController
{
    // index
    public function index()
    {
        checklogin();
        $m_activity   = new Activity_model();
        $activity     = $m_activity->listing();
        $total      = $m_activity->total();
        // print_r($activity);die();
        $data = ['title' => 'Trang (' . $total . ')',
            'activity'     => $activity,
            'content'    => 'admin/activity/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }


    // add
    public function add()
    {
        checklogin();
        $m_activity   = new activity_model();
        
        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'name' => 'required',
            ]
        )) {
                //  database
                $data = [
                    'name'    => $this->request->getVar('name'),
                    'content'             => $this->request->getVar('content'),
                ];
               
                $m_activity->add($data);

                return redirect()->to(base_url('admin/activity/'))->with('Success', 'Dữ liệu đã lưu thành công');
        }

        $data = ['title' => 'Add activity',
            'content'    => 'admin/activity/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // edit
    public function edit($id_activity)
    {
        checklogin();
        $m_category = new Category_model();
        $m_activity   = new activity_model();
        $category   = $m_category->listing();
        $activity     = $m_activity->detail($id_activity);
        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'name' => 'required',
            ]
        )) {
                $data = [
                    'id'       => $id_activity,
                    'name'         => $this->request->getVar('name'),
                    'content'     => $this->request->getVar('content'),
                ];
                // Gallery of project upload
                $m_activity->edit($data);
                return redirect()->to(base_url('admin/activity'))->with('Success', 'Dữ liệu đã lưu thành công');
            }
        
        $data = ['title' => 'Edit activity',
            'activity'     => $activity,
            'content'    => 'admin/activity/edit',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    // Delete
    public function delete($id_activity)
    {
        checklogin();
        $m_activity = new activity_model();
        $data     = ['id' => $id_activity];
        $m_activity->delete($data);
        // masuk database
        $this->session->setFlashdata('Success', 'Dữ liệu đã bị xóa');

        return redirect()->to(base_url('admin/activity'));
    }
}
