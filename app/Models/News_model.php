<?php

namespace App\Models;

use CodeIgniter\Model;

class News_model extends Model
{
    protected $table         = 'news';
    protected $primaryKey    = 'id_news';
    protected $allowedFields = [];

    // Listing
    public function listing()
    {
        $builder = $this->db->table('news');
        $builder->select('news.*, category.name_category, category.slug_category, users.name');
        $builder->join('category', 'category.id_category = news.id_category', 'LEFT');
        $builder->join('users', 'users.id_user = news.id_user', 'LEFT');
        $builder->orderBy('news.id_news', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // home
    public function client()
    {
        $builder = $this->db->table('client');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function beranda()
    {
        $builder = $this->db->table('news');
        $builder->select('news.*, category.name_category, category.slug_category, users.name');
        $builder->join('category', 'category.id_category = news.id_category', 'LEFT');
        $builder->join('users', 'users.id_user = news.id_user', 'LEFT');
        $builder->where(['status_news' => 'Publish',
            'type_news'               => 'news', 
            'category.id_category'               => 1, 
        ]);
        $builder->orderBy('news.date_publish', 'DESC');
        $builder->limit(4);
        $query = $builder->get();

        return $query->getResultArray();
    }

    public function beranda_project()
    {
        $builder = $this->db->table('news');
        $builder->select('news.*, category.name_category, category.slug_category, users.name');
        $builder->join('category', 'category.id_category = news.id_category', 'LEFT');
        $builder->join('users', 'users.id_user = news.id_user', 'LEFT');
        $builder->where(['status_news' => 'Publish',
            'type_news'               => 'news', 
            'category.id_category'               => 4, 
        ]);
        $builder->orderBy('news.date_publish', 'DESC');
        $builder->limit(8);
        $query = $builder->get();

        return $query->getResultArray();
    }

    public function beranda_intro()
    {
        $builder = $this->db->table('news');
        $builder->select('news.*, category.name_category, category.slug_category, users.name');
        $builder->join('category', 'category.id_category = news.id_category', 'LEFT');
        $builder->join('users', 'users.id_user = news.id_user', 'LEFT');
        $builder->where(['status_news' => 'Publish',
            'type_news'               => 'news', 
            'category.id_category'               => 3, 
        ]);
        $builder->orderBy('news.date_publish', 'DESC');
        $builder->limit(8);
        $query = $builder->get();

        return $query->getResultArray();
    }

    // home
    public function sidebar()
    {
        $builder = $this->db->table('news');
        $builder->select('news.*, category.name_category, category.slug_category, users.name');
        $builder->join('category', 'category.id_category = news.id_category', 'LEFT');
        $builder->join('users', 'users.id_user = news.id_user', 'LEFT');
        $builder->where(['status_news' => 'Publish',
            'type_news'               => 'news', 
            'news.id_category' => 1
        ]);
        $builder->orderBy('news.date_publish', 'DESC');
        $builder->limit(10);
        $query = $builder->get();

        return $query->getResultArray();
    }

    public function relate()
    {
        $builder = $this->db->table('news');
        $builder->select('news.*, category.name_category, category.slug_category, users.name');
        $builder->join('category', 'category.id_category = news.id_category', 'LEFT');
        $builder->join('users', 'users.id_user = news.id_user', 'LEFT');
        $builder->where(['status_news' => 'Publish',
            'type_news'               => 'news', 
            'news.id_category' => 4
        ]);
        $builder->orderBy('news.date_publish', 'DESC');
        $builder->limit(4);
        $query = $builder->get();

        return $query->getResultArray();
    }

    // home
    public function home()
    {
        $builder = $this->db->table('news');
        $builder->select('news.*, category.name_category, category.slug_category, users.name');
        $builder->join('category', 'category.id_category = news.id_category', 'LEFT');
        $builder->join('users', 'users.id_user = news.id_user', 'LEFT');
        $builder->where(['status_news' => 'Publish',
            'type_news'               => 'news', ]);
        $builder->orderBy('news.date_publish', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // category
    public function category($id_category)
    {
        $builder = $this->db->table('news');
        $builder->select('news.*, category.name_category, category.slug_category, users.name');
        $builder->join('category', 'category.id_category = news.id_category', 'LEFT');
        $builder->join('users', 'users.id_user = news.id_user', 'LEFT');
        $builder->where(['status_news' => 'Publish',
            'type_news'               => 'news',
            'news.id_category'         => $id_category, ]);
        $builder->orderBy('news.date_publish', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // category
    public function category_all($id_category)
    {
        $builder = $this->db->table('news');
        $builder->select('news.*, category.name_category, category.slug_category, users.name');
        $builder->join('category', 'category.id_category = news.id_category', 'LEFT');
        $builder->join('users', 'users.id_user = news.id_user', 'LEFT');
        $builder->where(['news.id_category' => $id_category]);
        $builder->orderBy('news.date_publish', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // total
    public function total_category($id_category)
    {
        $builder = $this->db->table('news')->where('id_category', $id_category);
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // author
    public function author_all($id_user)
    {
        $builder = $this->db->table('news');
        $builder->select('news.*, category.name_category, category.slug_category, users.name');
        $builder->join('category', 'category.id_category = news.id_category', 'LEFT');
        $builder->join('users', 'users.id_user = news.id_user', 'LEFT');
        $builder->where(['news.id_user' => $id_user]);
        $builder->orderBy('news.id_news', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // total
    public function total_author($id_user)
    {
        $builder = $this->db->table('news')->where('id_user', $id_user);
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // category
    public function type_news_all($type_news)
    {
        $builder = $this->db->table('news');
        $builder->select('news.*, category.name_category, category.slug_category, users.name');
        $builder->join('category', 'category.id_category = news.id_category', 'LEFT');
        $builder->join('users', 'users.id_user = news.id_user', 'LEFT');
        $builder->where(['news.type_news' => $type_news]);
        $builder->orderBy('news.id_news', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // total
    public function total_type_news($type_news)
    {
        $builder = $this->db->table('news')->where('type_news', $type_news);
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // status_news
    public function status_news_all($status_news)
    {
        $builder = $this->db->table('news');
        $builder->select('news.*, category.name_category, category.slug_category, users.name');
        $builder->join('category', 'category.id_category = news.id_category', 'LEFT');
        $builder->join('users', 'users.id_user = news.id_user', 'LEFT');
        $builder->where(['news.status_news' => $status_news]);
        $builder->orderBy('news.id_news', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // status_news
    public function total_status_news($status_news)
    {
        $builder = $this->db->table('news')->where('status_news', $status_news);
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // total
    public function total()
    {
        $builder = $this->db->table('news');
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // detail
    public function detail($id_news)
    {
        $builder = $this->db->table('news');
        $builder->select('news.*, category.name_category, category.slug_category, users.name');
        $builder->join('category', 'category.id_category = news.id_category', 'LEFT');
        $builder->join('users', 'users.id_user = news.id_user', 'LEFT');
        $builder->where('news.id_news', $id_news);
        $builder->orderBy('news.id_news', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // read
    public function read($slug_news)
    {
        $builder = $this->db->table('news');
        $builder->select('news.*, category.name_category, category.slug_category, users.name');
        $builder->join('category', 'category.id_category = news.id_category', 'LEFT');
        $builder->join('users', 'users.id_user = news.id_user', 'LEFT');
        $builder->where('news.slug_news', $slug_news);
        $builder->where('news.status_news', 'Publish');
        $builder->orderBy('news.id_news', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // add
    public function add($data)
    {
        $builder = $this->db->table('news');
        $builder->insert($data);
    }

    // add
    public function edit($data)
    {
        $builder = $this->db->table('news');
        $builder->where('id_news', $data['id_news']);
        $builder->update($data);
    }
}
