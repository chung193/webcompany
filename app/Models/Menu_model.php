<?php

namespace App\Models;

use CodeIgniter\Model;

class Menu_model extends Model
{
    // Menu news
    public function news()
    {
        $builder = $this->db->table('news');
        $builder->select('news.id_category,news.icon, news.summary, news.picture, category.name_category, category.slug_category');
        $builder->join('category', 'category.id_category = news.id_category');
        $builder->where(['status_news' => 'Publish', 'type_news' => 'news']);
        $builder->groupBy('news.id_category');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // Menu profil
    public function profil()
    {
        $builder = $this->db->table('news');
        $builder->select('news.title_news, news.icon, news.summary, news.picture, news.slug_news, news.id_news');
        $builder->where(['status_news' => 'Publish', 'type_news' => 'Profil']);
        $query = $builder->get();

        return $query->getResultArray();
    }

    // Menu Dịch vụ
    public function service()
    {
        $builder = $this->db->table('news');
        $builder->select('news.title_news, news.icon, news.summary, news.picture, news.slug_news, news.id_news');
        $builder->where(['status_news' => 'Publish', 'type_news' => 'Services']);
        $query = $builder->get();

        return $query->getResultArray();
    }
}
