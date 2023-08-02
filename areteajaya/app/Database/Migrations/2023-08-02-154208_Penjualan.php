<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penjualan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idPenjualan' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
        ]);
        $this->forge->addKey('idPenjualan', true);
        $this->forge->createTable('penjualan');
    }

    public function down()
    {
        $this->forge->dropTable('penjualan');
    }
}
