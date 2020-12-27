<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Controllers\Sepatu;
use App\Models\SepatuModel;
use CodeIgniter\HTTP\Request;

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

    // Fitur Halaman Admin

    public function daftar_sepatu()
    {
        $data = [
            'title' => 'Daftar Sepatu',
            'sepatu' => $this->sepatuModel->getSepatu()
        ];

        return view('admin/daftar-sepatu', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Sepatu',
            'sepatu' => $this->sepatuModel->getSepatu($slug)
        ];

        if (empty($data['sepatu'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Sepatu ' . $slug . 'Tidak ditemukan');
        }
        return view('admin/detail-sepatu', $data);
    }

    public function daftar_user()
    {

        return view('admin/daftar-user');
    }

    public function daftar_order()
    {

        return view('admin/daftar-order');
    }

    //pengelolaan sepatu
    public function create_sepatu()
    {
        $data = [
            'title' => 'Form Tambah Data Komik',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/create-sepatu', $data);
    }


    public function edit_sepatu($slug)
    {
        $data = [
            'title' => "From Ubah Data Sepatu",
            'validation' => \Config\Services::validation(),
            'sepatu' => $this->sepatuModel->getSepatu($slug)
        ];

        return view('admin/edit-sepatu', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[sepatu.nama]',
                'errors' => [
                    'required' => '{field} nama harus diisi.',
                    'is_unique' => '{field} nama sudah terdaftar.'
                ]
            ],
            'size' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} size harus diisi.',
                ]
            ],
            'style' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} style harus diisi.',
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} deskripsi harus diisi.',
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,5120]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/admin/create-sepatu')->withInput();
        }

        //ambil gambar
        $fileGambar = $this->request->getFile('gambar');
        // cek gambar upload
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default.jpg';
        } else {
            //generate nama gambar
            $namaGambar = $fileGambar->getRandomName();
            //pindah file ke folder img
            $fileGambar->move('img', $namaGambar);
        }


        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->sepatuModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'size' => $this->request->getVar('size'),
            'style' => $this->request->getVar('style'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admin/daftar-sepatu');
    }

    public function delete($id)
    {
        //cari gambar berdasarkan id
        $sepatu = $this->sepatuModel->find($id);
        //cek jika gambarnya default.png
        if ($sepatu['gambar'] != 'default.png') {
            //hapus gambar
            unlink('img/' . $sepatu['gambar']);
        }

        $this->sepatuModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin/daftar-sepatu');
    }

    public function update($id)
    {
        //cek nama
        $sepatuLama = $this->sepatuModel->getSepatu($this->request->getVar('slug'));
        if ($sepatuLama['nama'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[sepatu.nama]';
        }

        if (!$this->validate([
            'nama' => [
                'rules' => $rule_nama,
                'errors' => [
                    'required' => '{field} nama harus diisi.',
                    'is_unique' => '{field} nama sudah terdaftar.'
                ]
            ],
            'size' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} size harus diisi.',
                ]
            ],
            'style' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} style harus diisi.',
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} deskripsi harus diisi.',
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,5120]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/admin/edit-sepatu/' . $this->request->getVar('slug'))->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');
        // $fileDeskripsi = $this->request->getFile('deskripsi');

        //cek gambar, apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            //Generate nama file random
            $namaGambar = $fileGambar->getRandomName();
            //pindahkan gambar
            $fileGambar->move('img', $namaGambar);
            //hapus gambar lama
            unlink('img/' . $this->request->getVar('gambarLama'));
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->sepatuModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'size' => $this->request->getVar('size'),
            'style' => $this->request->getVar('style'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/admin/daftar-sepatu');
    }

    //


    //--------------------------------------------------------------------

}
