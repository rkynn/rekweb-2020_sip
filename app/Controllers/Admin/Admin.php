<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SepatuModel;

class Admin extends BaseController
{

    protected $SepatuModel;
    public function __construct()
    {
        $this->sepatuModel =  new SepatuModel();
    }

    public function index()
    {
        return view('admin/index');
    }

    public function daftar_sepatu()
    {
        $data = [
            'title' => 'Daftar Sepatu',
            'sepatu' => $this->sepatuModel->getSepatu()
        ];

        return view('admin/daftar-sepatu', $data);
    }

    public function daftar_user()
    {

        return view('admin/daftar-user');
    }

    public function daftar_order()
    {

        return view('admin/daftar-order');
    }





    //--------------------------------------------------------------------

}
