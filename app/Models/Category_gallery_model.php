<?php

namespace App\Models;

use CodeIgniter\Model;

class category_gallery_model extends Model
{
    protected $table              = 'category_gallery';
    protected $primaryKey         = 'id_category_gallery';
    protected $returnType         = 'array';
    protected $useSoftDeletes     = false;
    protected $allowedFields      = ['id_category_gallery', 'id_user', 'name_category_gallery', 'slug_category_gallery', 'order', 'views'];
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
        $builder = $this->db->table('category_gallery');
        $builder->orderBy('category_gallery.id_category_gallery', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // total
    public function total()
    {
        $builder = $this->db->table('category_gallery');
        $builder->select('COUNT(*) AS total');
        $builder->orderBy('category_gallery.id_category_gallery', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // detail
    public function detail($id_category_gallery)
    {
        $builder = $this->db->table('category_gallery');
        $builder->where('id_category_gallery', $id_category_gallery);
        $builder->orderBy('category_gallery.id_category_gallery', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // read
    public function read($slug_category_gallery)
    {
        $builder = $this->db->table('category_gallery');
        $builder->where('slug_category_gallery', $slug_category_gallery);
        $builder->orderBy('category_gallery.id_category_gallery', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }
}
