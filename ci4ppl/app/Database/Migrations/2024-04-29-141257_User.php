<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addKey('username', true);
        $this->forge->createTable('user', true);
    }

    public function down()
    {
        $this->forge->dropTable('user', true);
    }
}
