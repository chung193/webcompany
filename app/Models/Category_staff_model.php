<?php

namespace App\Models;

use CodeIgniter\Model;

class category_staff_model extends Model
{
    protected $table              = 'category_staff';
    protected $primaryKey         = 'id_category_staff';
    protected $returnType         = 'array';
    protected $useSoftDeletes     = false;
    protected $allowedFields      = ['id_category_staff', 'name_category_staff'];
    protected $useTimestamps      = false;
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    // listing
    public function listing()
    {
        $builder = $this->db->table('category_staff');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // total
    public function total()
    {
        $builder = $this->db->table('category_staff');
        $builder->select('COUNT(*) AS total');
        $builder->orderBy('category_staff.id_category_staff', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // detail
    public function detail($id_category_staff)
    {
        $builder = $this->db->table('category_staff');
        $builder->where('id_category_staff', $id_category_staff);
        $builder->orderBy('category_staff.id_category_staff', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // read
    public function read($slug_category_staff)
    {
        $builder = $this->db->table('category_staff');
        $builder->where('slug_category_staff', $slug_category_staff);
        $builder->orderBy('category_staff.id_category_staff', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }
}
