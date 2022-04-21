<?php

namespace App\Controllers\Admin;

class Dashboard extends BaseController
{
    public function index()
    {
        checklogin();
        $data = ['title' => 'Dashboard',
            'content'    => 'admin/dashboard/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }
}
