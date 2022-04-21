<?php

namespace App\Controllers;

use App\Models\news_model;
use App\Models\Client_model;
use App\Models\Gallery_model;
use App\Models\Config_model;

class Home extends BaseController
{
    // Homepage
    public function index()
    {
        $m_config = new config_model();
        $m_Gallery      = new Gallery_model();
        $m_client      = new Client_model();
        $m_news      = new news_model();
        $config   = $m_config->listing();
        $slider        = $m_Gallery->slider();
        $client        = $m_client->testimoni();
        $news2       = $m_news->beranda();
        $project       = $m_news->beranda_project();
       
        $client       = $m_news->client();
        
        $data = ['title'  => $config['nameweb'] . ' | ' . $config['tagline'],
            'description' => $config['nameweb'] . ', ' . $config['shorthand'],
            'keywords'    => $config['nameweb'] . ', ' . $config['keywords'],
            'slider'      => $slider,
            'config' => $config,
            'client'      => $client,
            'news2'     => $news2,
            'project'     => $project,
            'client' => $client,
            'content'     => 'home/index',
        ];
        echo view('layout/wrapper', $data);
    }
}
