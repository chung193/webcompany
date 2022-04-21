<?php

namespace App\Controllers;

use App\Models\News_model;
use App\Models\Category_model;
use App\Models\Config_model;

class News extends BaseController
{
    // index
    public function index()
    {
        $m_config = new Config_model();
        $m_news      = new News_model();
        $config   = $m_config->listing();
        $news        = $m_news->home();

        $data = ['title'  => 'news ' . $config['nameweb'],
            'description' => 'news ' . $config['nameweb'],
            'keywords'    => 'news ' . $config['nameweb'],
            'news'      => $news,
            'content'     => 'news/index',
        ];
        echo view('layout/wrapper', $data);
    }

    // read
    public function read($slug_news)
    {
        $m_config = new config_model();
        $m_news      = new News_model();
        $config   = $m_config->listing();
        $news        = $m_news->read($slug_news);
        $news_last        = $m_news->sidebar();
        // Update views
        $data = ['id_news' => $news['id_news'],
            'views'           => $news['views'] + 1,
        ];
        $m_news->edit($data);
        // Update views
        if($news['id_category'] == 4){
            $content = 'news/read_project';
        }else{
            $content = 'news/read';
        }
        $data = ['title'  => $news['title_news'],
            'description' => $news['title_news'],
            'keywords'    => $news['title_news'],
            'news'      => $news,
            'content'     => $content,
            'news_last' => $news_last,
        ];
        echo view('layout/wrapper', $data);
    }

    // profil
    public function profil($slug_news)
    {
        $m_config = new config_model();
        $m_news      = new News_model();
        $config   = $m_config->listing();
        $news        = $m_news->read($slug_news);

        // Update views
        $data = ['id_news' => $news['id_news'],
            'views'           => $news['views'] + 1,
        ];
        $m_news->edit($data);
        // Update views

        $data = ['title'  => $news['title_news'],
            'description' => $news['title_news'],
            'keywords'    => $news['title_news'],
            'news'      => $news,
            'content'     => 'news/profil',
        ];
        echo view('layout/wrapper', $data);
    }

    // Dịch vụ
    public function service($slug_news)
    {
        $m_config = new config_model();
        $m_news      = new News_model();
        $config   = $m_config->listing();
        $news        = $m_news->read($slug_news);

        // Update views
        $data = ['id_news' => $news['id_news'],
            'views'           => $news['views'] + 1,
        ];
        $m_news->edit($data);
        // Update views

        $data = ['title'  => $news['title_news'],
            'description' => $news['title_news'],
            'keywords'    => $news['title_news'],
            'news'      => $news,
            'content'     => 'news/Dịch vụ',
        ];
        echo view('layout/wrapper', $data);
    }

    // category
    public function category($slug_category)
    {
        $m_config = new config_model();
        $m_news      = new News_model();
        $m_category    = new Category_model();
        $config   = $m_config->listing();
        $category      = $m_category->read($slug_category);
        $news        = $m_news->category($category['id_category']);
        $news_last        = $m_news->sidebar();
        // Update views
        $data = ['id_category' => $category['id_category'],
            'views'             => $category['views'] + 1,
        ];
        $m_category->edit($data);
        // Update views

        if($slug_category == 'du-an'){
            $temple = 'news/project';
        }else{
            $temple = 'news/index';
        }

        // print_r($news); die();

        $data = ['title'  => $category['name_category'],
            'description' => $category['name_category'],
            'keywords'    => $category['name_category'],
            'category'    => $category,
            'news'      => $news,
            'news_last' => $news_last,
            'content'     => $temple,
        ];
        // print_r($news); die();
        echo view('layout/wrapper', $data);
    }
}
