<?php

namespace App\Models;

use CodeIgniter\Model;

class Download_model extends Model
{
    protected $table         = 'download';
    protected $primaryKey    = 'id_download';
    protected $allowedFields = [];

    // Listing
    public function listing()
    {
        $builder = $this->db->table('download');
        $builder->select('download.*, category_download.name_category_download, category_download.slug_category_download, users.name');
        $builder->join('category_download', 'category_download.id_category_download = download.id_category_download', 'LEFT');
        $builder->join('users', 'users.id_user = download.id_user', 'LEFT');
        $builder->orderBy('download.id_download', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // Listing
    public function type_download($type_download)
    {
        $builder = $this->db->table('download');
        $builder->select('download.*, category_download.name_category_download, category_download.slug_category_download, users.name');
        $builder->join('category_download', 'category_download.id_category_download = download.id_category_download', 'LEFT');
        $builder->join('users', 'users.id_user = download.id_user', 'LEFT');
        $builder->where('download.type_download', $type_download);
        $builder->orderBy('download.id_download', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // total
    public function total()
    {
        $builder = $this->db->table('download');
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // detail
    public function detail($id_download)
    {
        $builder = $this->db->table('download');
        $builder->select('download.*, category_download.name_category_download, category_download.slug_category_download, users.name');
        $builder->join('category_download', 'category_download.id_category_download = download.id_category_download', 'LEFT');
        $builder->join('users', 'users.id_user = download.id_user', 'LEFT');
        $builder->where('download.id_download', $id_download);
        $builder->orderBy('download.id_download', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // add
    public function add($data)
    {
        $builder = $this->db->table('download');
        $builder->insert($data);
    }

    // add
    public function edit($data)
    {
        $builder = $this->db->table('download');
        $builder->where('id_download', $data['id_download']);
        $builder->update($data);
    }

    // slider
    public function slider()
    {
        $builder = $this->db->table('download');
        $builder->where('type_download', 'Homepage');
        $builder->orderBy('download.id_download', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }
}
