<?php

namespace App\Models;

use CodeIgniter\Model;

class Category_model extends Model
{
    protected $table              = 'category';
    protected $primaryKey         = 'id_category';
    protected $returnType         = 'array';
    protected $useSoftDeletes     = false;
    protected $allowedFields      = ['id_category', 'id_user', 'name_category', 'slug_category', 'urutan', 'hits'];
    protected $useTimestamps      = false;
    protected $createdField       = 'created_at';
    protected $updatedField       = 'updated_at';
    protected $deletedField       = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    // listing
    public function listing()
    {
        $builder = $this->db->table('category');
        $builder->orderBy('category.id_category', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // total
    public function total()
    {
        $builder = $this->db->table('category');
        $builder->select('COUNT(*) AS total');
        $builder->orderBy('category.id_category', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // detail
    public function detail($id_category)
    {
        $builder = $this->db->table('category');
        $builder->where('id_category', $id_category);
        $builder->orderBy('category.id_category', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // read
    public function read($slug_category)
    {
        $builder = $this->db->table('category');
        $builder->where('slug_category', $slug_category);
        $builder->orderBy('category.id_category', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // edit
    public function edit($data)
    {
        $builder = $this->db->table('category');
        $builder->where('id_category', $data['id_category']);
        $builder->update($data);
    }
}
