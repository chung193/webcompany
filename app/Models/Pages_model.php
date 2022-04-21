<?php

namespace App\Models;

use CodeIgniter\Model;

class Pages_model extends Model
{
    protected $table         = 'pages';
    protected $primaryKey    = 'id_pages';
    protected $allowedFields = [];

    // Listing
    public function listing()
    {
        $builder = $this->db->table('pages');
        $builder->select('pages.*, pages.show_on_menu as menu,pages.show_on_footer as footer , users.name');
        $builder->join('users', 'users.id_user = pages.id_user', 'LEFT');
        $builder->orderBy('pages.id_pages', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    public function listing_menu()
    {
        $builder = $this->db->table('pages');
        $builder->select('pages.*, users.name');
        $builder->join('users', 'users.id_user = pages.id_user', 'LEFT');
        $builder->where('pages.show_on_menu', '1');
        $builder->orderBy('pages.id_pages', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    public function listing_footer()
    {
        $builder = $this->db->table('pages');
        $builder->select('pages.*, users.name');
        $builder->join('users', 'users.id_user = pages.id_user', 'LEFT');
        $builder->where('pages.show_on_footer', '1');
        $builder->orderBy('pages.id_pages', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

 
    // total
    public function total()
    {
        $builder = $this->db->table('pages');
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // detail
    public function detail($id_pages)
    {
        $builder = $this->db->table('pages');
        $builder->select('pages.*, pages.show_on_menu as menu, pages.show_on_footer as footer, users.name');
        $builder->join('users', 'users.id_user = pages.id_user', 'LEFT');
        $builder->where('pages.id_pages', $id_pages);
        $builder->orderBy('pages.id_pages', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // read
    public function read($slug_pages)
    {
        $builder = $this->db->table('pages');
        $builder->select('pages.*, users.name');
        $builder->join('users', 'users.id_user = pages.id_user', 'LEFT');
        $builder->where('pages.slug_pages', $slug_pages);
        $builder->orderBy('pages.id_pages', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // add
    public function add($data)
    {
        $builder = $this->db->table('pages');
        $builder->insert($data);
    }

    // add
    public function edit($data)
    {
        $builder = $this->db->table('pages');
        $builder->where('id_pages', $data['id_pages']);
        $builder->update($data);
    }
}
