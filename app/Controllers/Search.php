<?php

namespace App\Controllers;

use App\Models\Search_model;

class Search extends BaseController
{
    // Staff
    public function index()
    {
        $data = ['title'  => 'Tìm kiếm',
            'description' => 'Tìm kiếm bài viết hoặc dự án - NewCT',
            'keywords'    => 'Tìm kiếm bài viết hoặc dự án - NewCT',
            'content'     => 'search/search',
        ];
        echo view('layout/wrapper', $data);
    }

    public function news()
    {
        $m_data = new Search_model();
        $data = $m_data->search($_GET['q']);
        echo json_encode($data);
    }
}
