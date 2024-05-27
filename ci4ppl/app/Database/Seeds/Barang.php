<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class Barang extends Seeder
{
    public function run()
    {
    $data = [
        [
            'kode' => 'B001',
            'nama_barang' => 'PENA',
            'harga' => '5000'
        ],
        [
            'kode' => 'B002',
            'nama_barang' => 'PENGHAPUS',
            'harga' => '3000'
        ],
        [
            'kode' => 'B003',
            'nama_barang' => 'PENSIL',
            'harga' => '2000'
        ],
        // Tambahkan data lainnya di sini...
    ];
    $this->db->table('barang')->insertBatch($data);
    }
}
