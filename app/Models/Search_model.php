<?php

namespace App\Models;

use CodeIgniter\Model;

class Search_model extends Model
{
    protected $table         = 'staff';
    protected $primaryKey    = 'id_staff';
    protected $allowedFields = [];

    // Listing
    public function search($k)
    {
        $builder = $this->db->table('news');
        $builder->select('news.*, category.name_category, category.slug_category, users.name');
        $builder->join('category', 'category.id_category = news.id_category', 'LEFT');
        $builder->join('users', 'users.id_user = news.id_user', 'LEFT');
        $builder->where('news.title_news', $k);
        $builder->orderBy('news.id_news', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

}
