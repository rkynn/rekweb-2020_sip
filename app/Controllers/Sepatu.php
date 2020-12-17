<?php

namespace App\Controllers;

use App\Models\SepatuModel;

class Sepatu extends BaseController
{
    protected $SepatuModel;
    public function __construct()
    {
        $this->sepatuModel =  new SepatuModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Sepatu',
            'sepatu' => $this->sepatuModel->getSepatu()
        ];

        return view('Sepatu/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Sepatu',
            'Sepatu' => $this->SepatuModel->getSepatu($slug)
        ];

        if (empty($data['sepatu'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Sepatu ' . $slug . 'Tidak ditemukan');
        }
        return view('sepatu/detail', $data);
    }
}
