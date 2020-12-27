<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutModel extends Model
{
    protected $table = 'about';
    protected $useTimestamps = true;
    protected $allowedField = ['id', 'nama', 'nrp', 'tugas', 'gambar'];

    public function getAbout($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
