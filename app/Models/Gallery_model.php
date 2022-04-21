<?php

namespace App\Models;

use CodeIgniter\Model;

class Gallery_model extends Model
{
    protected $table         = 'gallery';
    protected $primaryKey    = 'id_gallery';
    protected $allowedFields = [];

    // Listing
    public function listing()
    {
        $builder = $this->db->table('gallery');
        $builder->select('gallery.*, category_gallery.name_category_gallery, category_gallery.slug_category_gallery, users.name');
        $builder->join('category_gallery', 'category_gallery.id_category_gallery = gallery.id_category_gallery', 'LEFT');
        $builder->join('users', 'users.id_user = gallery.id_user', 'LEFT');
        $builder->orderBy('gallery.id_gallery', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // total
    public function total()
    {
        $builder = $this->db->table('gallery');
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // detail
    public function detail($id_gallery)
    {
        $builder = $this->db->table('gallery');
        $builder->select('gallery.*, category_gallery.name_category_gallery, category_gallery.slug_category_gallery, users.name');
        $builder->join('category_gallery', 'category_gallery.id_category_gallery = gallery.id_category_gallery', 'LEFT');
        $builder->join('users', 'users.id_user = gallery.id_user', 'LEFT');
        $builder->where('gallery.id_gallery', $id_gallery);
        $builder->orderBy('gallery.id_gallery', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // add
    public function add($data)
    {
        $builder = $this->db->table('gallery');
        $builder->insert($data);
    }

    // add
    public function edit($data)
    {
        $builder = $this->db->table('gallery');
        $builder->where('id_gallery', $data['id_gallery']);
        $builder->update($data);
    }

    // slider
    public function slider()
    {
        $builder = $this->db->table('gallery');
        $builder->where('type_gallery', 'Homepage');
        $builder->orderBy('gallery.id_gallery', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // gallery
    public function gallery()
    {
        $builder = $this->db->table('gallery');
        $builder->where('type_gallery', 'gallery');
        $builder->orderBy('gallery.id_gallery', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }
}
