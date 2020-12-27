<?php

namespace App\Controllers;

use App\Models\AboutModel;

class About extends BaseController
{
    protected $AboutModel;
    public function __construct()
    {
        $this->AboutModel =  new AboutModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar About',
            'About' => $this->AboutModel->getAbout()
        ];

        return view('About/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail About',
            'About' => $this->AboutModel->getAbout($slug)
        ];

        if (empty($data['about'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama ' . $slug . 'Tidak ditemukan');
        }
        return view('about/detail', $data);
    }
}
