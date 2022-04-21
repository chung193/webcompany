<?php

namespace App\Models;

use CodeIgniter\Model;

class Config_model extends Model
{
    protected $table         = 'config';
    protected $primaryKey    = 'id_config';
    protected $allowedFields = [];

    // Listing
    public function listing()
    {
        return $this->asArray()
            ->first();
    }

    // add
    public function edit($data)
    {
        $builder = $this->db->table('config');
        $builder->where('id_config', $data['id_config']);
        $builder->update($data);
    }
}
