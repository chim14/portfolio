<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemesanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idPemesanan' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'invoicePemesanan' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => false,
            ],
            'qtyPemesanan' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => false,
            ],
            'totalHargaPemesanan' => [
                'type' => 'INT',
                'constraint' => '30',
                'null' => false,
            ],
            'tanggalRequestPemesanan' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'tanggalPemesanan' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'tanggalUbahPemesanan' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('idPemesanan', true);
        $this->forge->createTable('pemesanan');
    }

    public function down()
    {
        $this->forge->dropTable('pemesanan');
    }
}
