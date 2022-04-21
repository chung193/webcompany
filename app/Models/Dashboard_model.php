<?php

namespace App\Models;

use CodeIgniter\Model;

class Dashboard_model extends Model
{
    // news
    public function news()
    {
        $builder = $this->db->table('news');
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // user
    public function user()
    {
        $builder = $this->db->table('users');
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // client
    public function client()
    {
        $builder = $this->db->table('client');
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // Gallery
    public function Gallery()
    {
        $builder = $this->db->table('gallery');
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // video
    public function video()
    {
        $builder = $this->db->table('video');
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // download
    public function download()
    {
        $builder = $this->db->table('download');
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // staff
    public function staff()
    {
        $builder = $this->db->table('staff');
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // category_download
    public function category_download()
    {
        $builder = $this->db->table('category_download');
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // category
    public function category()
    {
        $builder = $this->db->table('category');
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // category_staff
    public function category_staff()
    {
        $builder = $this->db->table('category_staff');
        $query   = $builder->get();

        return $query->getNumRows();
    }
}
