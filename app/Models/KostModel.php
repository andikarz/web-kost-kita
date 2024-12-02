<?php

namespace App\Models;

use CodeIgniter\Model;

class KostModel extends Model
{
    protected $table = 'kost_list';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    public function getKost($slug = false)
    {
        if($slug = false)
        {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}

?>