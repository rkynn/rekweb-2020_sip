<?php

namespace App\Models;

use CodeIgniter\Model;

class SepatuModel extends Model
{
    protected $table = 'sepatu';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'slug', 'size', 'style', 'deskripsi', 'gambar'];

    public function getSepatu($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        return $this->table('sepatu')->like('nama', $keyword);
    }
}
