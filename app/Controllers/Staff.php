<?php

namespace App\Controllers;

use App\Models\category_staff_model;
use App\Models\Konfigurasi_model;
use App\Models\Staff_model;

class Staff extends BaseController
{
    // Staff
    public function index()
    {
        $m_konfigurasi = new Konfigurasi_model();
        $m_staff       = new Staff_model();
        $m_category    = new category_staff_model();
        $konfigurasi   = $m_konfigurasi->listing();
        $category      = $m_category->listing();

        $data = ['title'  => 'Staff Kami',
            'description' => 'Staff Kami ' . $konfigurasi['nameweb'] . ', ' . $konfigurasi['tentang'],
            'keywords'    => 'Staff Kami ' . $konfigurasi['nameweb'] . ', ' . $konfigurasi['keywords'],
            'category'    => $category,
            'm_staff'     => $m_staff,
            'konfigurasi' => $konfigurasi,
            'content'     => 'staff/index',
        ];
        echo view('layout/wrapper', $data);
    }
}
