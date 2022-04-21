<?php

namespace App\Models;

use CodeIgniter\Model;

class ACtivity_model extends Model
{
    protected $table         = 'activity';
    protected $primaryKey    = 'id_activity';
    protected $allowedFields = [];

    // Listing
    public function listing()
    {
        $builder = $this->db->table('activity');
        $builder->select('activity.*');
        $builder->orderBy('activity.id', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    
    // home
    public function home()
    {
        $builder = $this->db->table('activity');
        $builder->select('activity.*, category_activity.name_category_activity, category_activity.slug_category_activity, users.name AS name_admin');
        $builder->join('category_activity', 'category_activity.id_category_activity = activity.id_category_activity', 'LEFT');
        $builder->join('users', 'users.id_user = activity.id_user', 'LEFT');
        $builder->where('activity.status_activity', 'Publish');
        $builder->orderBy('activity.id_activity', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // total
    public function total()
    {
        $builder = $this->db->table('activity');
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // detail
    public function detail($id_activity)
    {
        $builder = $this->db->table('activity');
        $builder->select('activity.*');
        $builder->where('activity.id', $id_activity);
        $builder->orderBy('activity.id', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // add
    public function add($data)
    {
        $builder = $this->db->table('activity');
        $builder->insert($data);
    }

    // add
    public function edit($data)
    {
        $builder = $this->db->table('activity');
        $builder->where('id', $data['id']);
        $builder->update($data);
    }

    // slider
    public function slider()
    {
        $builder = $this->db->table('activity');
        $builder->where('type_activity', 'Homepage');
        $builder->orderBy('activity.id_activity', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }
}
