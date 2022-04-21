<?php

namespace App\Models;

use CodeIgniter\Model;

class category_download_model extends Model
{
    protected $table              = 'category_download';
    protected $primaryKey         = 'id_category_download';
    protected $returnType         = 'array';
    protected $useSoftDeletes     = false;
    protected $allowedFields      = ['id_category_download', 'id_user', 'name_category_download', 'slug_category_download', 'urutan', 'hits'];
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
        $builder = $this->db->table('category_download');
        $builder->orderBy('category_download.id_category_download', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // total
    public function total()
    {
        $builder = $this->db->table('category_download');
        $builder->select('COUNT(*) AS total');
        $builder->orderBy('category_download.id_category_download', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // detail
    public function detail($id_category_download)
    {
        $builder = $this->db->table('category_download');
        $builder->where('id_category_download', $id_category_download);
        $builder->orderBy('category_download.id_category_download', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // read
    public function read($slug_category_download)
    {
        $builder = $this->db->table('category_download');
        $builder->where('slug_category_download', $slug_category_download);
        $builder->orderBy('category_download.id_category_download', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }
}
