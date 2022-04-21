<?php

namespace App\Models;

use CodeIgniter\Model;

class Pmodel extends Model
{
    protected $table              = 'news';
    protected $primaryKey         = 'id_news';
    protected $returnType         = 'array';
    protected $useSoftDeletes     = true;
    protected $allowedFields      = ['title_news'];
    protected $useTimestamps      = false;
    protected $createdField       = 'date';
    protected $updatedField       = 'date';
    protected $deletedField       = 'date';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
