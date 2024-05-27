<?php

namespace App\Models;

use CodeIgniter\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'kode';
    protected $allowedFields = ['kode', 'nama_barang', 'harga', 'gambar'];

    public function getAllBarang()
    {
        // Mengambil semua data barang
        return $this->findAll();
    }

    public function getBarangByKode($kode)
    {
        // Mengambil data barang berdasarkan kode
        return $this->find($kode);
    }

    public function tambahBarang($data)
    {
        // Menambahkan barang baru
        return $this->insert($data);
    }

    public function updateBarang($kode, $data)
    {
        // Mengupdate data barang berdasarkan kode
        return $this->update($kode, $data);
    }

    public function hapusBarang($kode)
    {
        // Menghapus barang berdasarkan kode
        return $this->delete($kode);
    }
}
