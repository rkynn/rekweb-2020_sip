<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => '.SIP'
        ];
        return view('pages/home');
    }

    public function about()
    {
        $data = [
            'title' => 'About Us'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us!',
            'alamat' => [
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Dr. Setiabudi No.193, Gegerkalong',
                    'kota' => 'Kec. Sukasari, Kota Bandung, Jawa Barat 40153'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }




    //--------------------------------------------------------------------

}
