<?php

namespace App\Controllers;

use App\Models\Barang;

class CBarang extends BaseController
{
    public function index()
    {
        $model = new Barang();

        // Mendapatkan halaman yang diminta oleh pengguna dari URL
        $currentPage = $this->request->getVar('page') ?? 1;

        // Mendapatkan jumlah data per halaman
        $perPage = 3;

        // Menghitung offset
        $offset = ($currentPage - 1) * $perPage;

        // Mengambil data dengan menggunakan pager
        $data['barang'] = $model->paginate($perPage, 'default', $currentPage);

        // Membuat objek Pager
        $pager = $model->pager;

        return view('v_barang2', [
            'barang' => $data['barang'],
            'pager' => $pager
        ]);
    }

    public function view($kode)
    {
        $model = new Barang();

        // Ambil data barang berdasarkan kode
        $data['barang'] = $model->where('kode', $kode)->first();

        return view('v_detail', $data);
    }

    public function tambah()
    {
        return view('v_inputbarang');
    }

    public function simpan()
    {
        $model = new Barang();

        // Ambil data dari form
        $data = [
            'kode' => $this->request->getPost('kode'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga' => $this->request->getPost('harga')
        ];

        // Simpan data ke database
        $model->insert($data);

        return redirect()->to('/barang2');
    }

    public function buat()
    {
        return view('barang2/buat');
    }

    public function create()
    {
        $model = new Barang();

        // Ambil data dari form
        $data = [
            'kode' => $this->request->getPost('kode'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga' => $this->request->getPost('harga')
        ];

        // Simpan gambar
        $gambar = $this->request->getFile('gambar');
        if ($gambar->isValid()) {
            $gambarName = $gambar->getRandomName();
            $gambar->move(ROOTPATH . '/public/upload', $gambarName);
            $data['gambar'] = $gambarName;
        }

        // Simpan data ke database
        $model->insert($data);

        return redirect()->to('/barang2');
    }
}
