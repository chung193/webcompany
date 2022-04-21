<?php

namespace App\Controllers;

use App\Models\Pages_model;
use App\Models\Staff_model;
use App\Models\Category_model;
use App\Models\Config_model;

class Pages extends BaseController
{

    // read
    public function read($slug_pages)
    {
        $m_config = new config_model();
        $m_staff = new Staff_model();
        $m_pages      = new pages_model();
        $list_pages = $m_pages->listing();
        $staff = $m_staff->listing();
        $config   = $m_config->listing();
        $pages        = $m_pages->read($slug_pages);
        // $pages_last        = $m_pages->sidebar();
        // Update views
        $data = ['id_pages' => $pages['id_pages'],
            // 'views'           => $pages['views'] + 1,
        ];
        $m_pages->edit($data);
        // Update views
        if($slug_pages == 'lien-he'){
            $content = 'pages/lien-he';
        }elseif($slug_pages == 'dieu-khoan-dich-vu'){
            $content = 'pages/dieu-khoan-dich-vu';
        }elseif($slug_pages == 'dich-vu'){
            $content = 'pages/dich-vu';
        }elseif($slug_pages == 'gioi-thieu'){
            $content = 'pages/gioi-thieu';
        }elseif($slug_pages == 'chinh-sach-bao-mat'){
            $content = 'pages/dieu-khoan-dich-vu';
        }elseif($slug_pages == 'chinh-sach-doi-tra'){
            $content = 'pages/dieu-khoan-dich-vu';
        }

        $data = ['title'  => $pages['title_pages'],
            'description' => $pages['summary'],
            'keywords'    => $pages['keywords'],
            'pages'      => $pages,
            'content'     => $content,
            'config' => $config,
            'list_page' => $list_pages
        ];
        if($slug_pages == 'gioi-thieu'){
            $data['staff'] = $staff;
        }
        echo view('layout/wrapper', $data);
    }
}
