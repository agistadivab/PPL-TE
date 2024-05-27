<?php

namespace App\Controllers;

use App\Models\Barang;
use CodeIgniter\Controller;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\CLIRequest;


class BarangController extends Controller
{
    protected $db;
    protected $request;

    public function __construct(ConnectionInterface $db, $request = null)
    {
        $this->db = $db;

        // Membuat objek $request berdasarkan tipe permintaan
        if ($request instanceof IncomingRequest) {
            // Jika permintaan HTTP
            $this->request = $request;
        } else {
            // Jika permintaan bukan HTTP (misalnya, permintaan CLI)
            $this->request = new CLIRequest(new \Config\App());
        }
    }

    public function index()
    {
        $model = new Barang();
        $data['barang'] = $this->db->query('SELECT * FROM barang')->getResultArray();

        return view('v_barang', $data);
    }

    public function tambah()
    {
        return view('v_inputbarang');
    }

    public function simpan()
    {
        $data = [
            'kode' => $this->request->getPost('kode'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga' => $this->request->getPost('harga')
        ];

        $query = "INSERT INTO barang (kode, nama_barang, harga) VALUES (?, ?, ?)";
        $this->db->query($query, [$data['kode'], $data['nama_barang'], $data['harga']]);

        return redirect()->to('/barang');
    }

    public function hapus($kode)
    {
        $query = "DELETE FROM barang WHERE kode = ?";
        $this->db->query($query, [$kode]);

        return redirect()->to('/barang');
    }

    public function view($kode)
    {
        $query = "SELECT * FROM barang WHERE kode = ?";
        $data['barang'] = $this->db->query($query, [$kode])->getRowArray();

        return view('v_detailbarang', $data);
    }

    public function buat()
    {
        return view('barang/buat');
    }

    public function create()
    {
        $data = [
            'kode' => $this->request->getPost('kode'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga' => $this->request->getPost('harga')
        ];

        $query = "INSERT INTO barang (kode, nama_barang, harga) VALUES (?, ?, ?)";
        $this->db->query($query, [$data['kode'], $data['nama_barang'], $data['harga']]);

        return redirect()->to('/barang');
    }

    public function edit($kode)
    {
        $query = "SELECT * FROM barang WHERE kode = ?";
        $data['barang'] = $this->db->query($query, [$kode])->getRowArray();

        return view('v_editbarang', $data);
    }

    public function update($kode)
    {
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga' => $this->request->getPost('harga')
        ];

        $query = "UPDATE barang SET nama_barang = ?, harga = ? WHERE kode = ?";
        $this->db->query($query, [$data['nama_barang'], $data['harga'], $kode]);

        return redirect()->to('/barang');
    }
}
