<?php

namespace App\Models;

use CodeIgniter\Model;

class History_model extends Model
{
    protected $table         = 'history';
    protected $primaryKey    = 'id_history';
    protected $allowedFields = [];

    // Listing
    public function listing()
    {
        $builder = $this->db->table('history');
        $builder->select('history.*');
        $builder->orderBy('history.id', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // detail
    public function detail($id_history)
    {
        $builder = $this->db->table('history');
        $builder->select('history.*');
        $builder->where('history.id', $id_history);
        $builder->orderBy('history.id', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // add
    public function add($data)
    {
        $builder = $this->db->table('history');
        $builder->insert($data);
    }

    // add
    public function edit($data)
    {
        $builder = $this->db->table('history');
        $builder->where('id', $data['id']);
        $builder->update($data);
    }

    // slider
    public function slider()
    {
        $builder = $this->db->table('history');
        $builder->where('type_history', 'Homepage');
        $builder->orderBy('history.id_history', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }
}
