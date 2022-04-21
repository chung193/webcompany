<?php

namespace App\Models;

use CodeIgniter\Model;

class Intro_model extends Model
{
    protected $table         = 'intro_in_landingpage';
    protected $primaryKey    = 'id';
    protected $allowedFields = [];

    // detail
    public function detail($id_intro)
    {
        $builder = $this->db->table('intro_in_landingpage');
        $builder->select('intro_in_landingpage.*');
        $builder->where('intro_in_landingpage.id', $id_intro);
        $builder->orderBy('intro_in_landingpage.id', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }


    public function edit($data)
    {
        $builder = $this->db->table('intro_in_landingpage');
        $builder->where('id', $data['id']);
        $builder->update($data);
    }

}
