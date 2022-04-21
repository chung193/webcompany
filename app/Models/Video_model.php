<?php

namespace App\Models;

use CodeIgniter\Model;

class Video_model extends Model
{
    protected $table              = 'video';
    protected $primaryKey         = 'id_video';
    protected $returnType         = 'array';
    protected $useSoftDeletes     = false;
    protected $allowedFields      = ['id_video', 'title', 'video', 'summary'];
    protected $useTimestamps      = false;
    protected $createdField       = 'date_post';
    protected $updatedField       = 'date';
    protected $deletedField       = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    // listing
    public function listing()
    {
        $builder = $this->db->table('video');
        $builder->orderBy('video.id_video', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // total
    public function total()
    {
        $builder = $this->db->table('video');
        $builder->select('COUNT(*) AS total');
        $builder->orderBy('video.id_video', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // detail
    public function detail($id_video)
    {
        $builder = $this->db->table('video');
        $builder->where('id_video', $id_video);
        $builder->orderBy('video.id_video', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // read
    public function read($slug_video)
    {
        $builder = $this->db->table('video');
        $builder->where('slug_video', $slug_video);
        $builder->orderBy('video.id_video', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }
}
