<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idUser' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'namaUser' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
                'null' => false,
            ],
            'posisiUser' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => false,
            ],
            'emailUser' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => false,
            ],
            'passwordUser' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('idUser', true);
        $this->forge->createTable('user');
    }
    public function down()
    {
        $this->forge->dropTable('user');
    }
}
