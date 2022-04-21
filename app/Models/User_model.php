<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
    protected $table              = 'users';
    protected $primaryKey         = 'id_user';
    protected $returnType         = 'array';
    protected $useSoftDeletes     = false;
    protected $allowedFields      = ['id_user', 'name', 'email', 'username', 'password', 'access_level', 'code_secrect', 'picture', 'summary', 'date_post'];
    protected $useTimestamps      = false;
    protected $createdField       = 'created_at';
    protected $updatedField       = 'updated_at';
    protected $deletedField       = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    // login
    public function login($username, $password)
    {
        return $this->asArray()
            ->where(['username' => $username,
                'password'      => sha1($password), ])
            ->first();
    }

    // listing
    public function listing()
    {
        $builder = $this->db->table('users');
        $builder->orderBy('users.id_user', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // total
    public function total()
    {
        $builder = $this->db->table('users');
        $builder->select('COUNT(*) AS total');
        $builder->orderBy('users.id_user', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // detail
    public function detail($id_user)
    {
        $builder = $this->db->table('users');
        $builder->where('id_user', $id_user);
        $builder->orderBy('users.id_user', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // add  log
    public function user_log($data)
    {
        $builder = $this->db->table('user_logs');
        $builder->insert($data);
    }
}
