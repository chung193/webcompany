<?php

namespace App\Models;

use CodeIgniter\Model;

class Staff_model extends Model
{
    protected $table         = 'staff';
    protected $primaryKey    = 'id_staff';
    protected $allowedFields = [];

    // Listing
    public function listing()
    {
        $builder = $this->db->table('staff');
        $builder->select('staff.*, category_staff.name_category_staff');
        $builder->join('category_staff', 'category_staff.id_category_staff = staff.id_category_staff', 'LEFT');
        $builder->orderBy('staff.id_staff', 'DESC');
        $builder->limit(5);
        $query = $builder->get();

        return $query->getResultArray();
    }

    // staff
    public function category_staff($id_category_staff)
    {
        $builder = $this->db->table('staff');
        $builder->select('staff.*, category_staff.name_category_staff, category_staff.slug_category_staff, users.name AS name_admin');
        $builder->join('category_staff', 'category_staff.id_category_staff = staff.id_category_staff', 'LEFT');
        $builder->join('users', 'users.id_user = staff.id_user', 'LEFT');
        $builder->where('staff.id_category_staff', $id_category_staff);
        $builder->orderBy('staff.order', 'ASC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // home
    public function home()
    {
        $builder = $this->db->table('staff');
        $builder->select('staff.*, category_staff.name_category_staff, category_staff.slug_category_staff, users.name AS name_admin');
        $builder->join('category_staff', 'category_staff.id_category_staff = staff.id_category_staff', 'LEFT');
        $builder->join('users', 'users.id_user = staff.id_user', 'LEFT');
        $builder->where('staff.status_staff', 'Publish');
        $builder->orderBy('staff.id_staff', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // total
    public function total()
    {
        $builder = $this->db->table('staff');
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // detail
    public function detail($id_staff)
    {
        $builder = $this->db->table('staff');
        $builder->select('staff.*, category_staff.name_category_staff, category_staff.slug_category_staff, users.name AS name_admin');
        $builder->join('category_staff', 'category_staff.id_category_staff = staff.id_category_staff', 'LEFT');
        $builder->join('users', 'users.id_user = staff.id_user', 'LEFT');
        $builder->where('staff.id_staff', $id_staff);
        $builder->orderBy('staff.id_staff', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // add
    public function add($data)
    {
        $builder = $this->db->table('staff');
        $builder->insert($data);
    }

    // add
    public function edit($data)
    {
        $builder = $this->db->table('staff');
        $builder->where('id_staff', $data['id_staff']);
        $builder->update($data);
    }

    // slider
    public function slider()
    {
        $builder = $this->db->table('staff');
        $builder->where('type_staff', 'Homepage');
        $builder->orderBy('staff.id_staff', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }
}
