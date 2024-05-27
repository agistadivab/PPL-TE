<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'primary' => true,
            ],
            'nama_barang' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'harga' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ]
        ]);
        $this->forge->createTable('barang');        
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
