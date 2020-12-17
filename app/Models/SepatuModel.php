<?php

namespace App\Models;

use CodeIgniter\Model;

class SepatuModel extends Model
{
    protected $table = 'sepatu';
    protected $useTimestamps = true;
    protected $allowedField = ['id_sepatu', 'nama_sepatu', 'deskripsi_sepatu', 'gambar_sepatu'];

    public function getSepatu($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
