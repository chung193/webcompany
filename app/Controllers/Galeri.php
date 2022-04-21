<?php

namespace App\Controllers;

use App\Models\Gallery_model;
use App\Models\Konfigurasi_model;

class Gallery extends BaseController
{
    // Gallery
    public function index()
    {
        $m_konfigurasi = new Konfigurasi_model();
        $m_Gallery      = new Gallery_model();
        $konfigurasi   = $m_konfigurasi->listing();
        $Gallery        = $m_Gallery->Gallery();

        $data = ['title'  => 'Gallery picture',
            'description' => 'Gallery picture ' . $konfigurasi['nameweb'] . ', ' . $konfigurasi['tentang'],
            'keywords'    => 'Gallery picture ' . $konfigurasi['nameweb'] . ', ' . $konfigurasi['keywords'],
            'Gallery'      => $Gallery,
            'konfigurasi' => $konfigurasi,
            'content'     => 'Gallery/index',
        ];
        echo view('layout/wrapper', $data);
    }
}
