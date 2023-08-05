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
            'idCustomer' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => false,
            ],
            'idProduk' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'unitProduk' => [
                'type' => 'INT',
                'constraint' => '30',
                'null' => false,
            ],
            'qtyProduk' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => false,
            ],
            'hargaProduk' => [
                'type' => 'INT',
                'constraint' => '30',
                'null' => false,
            ],
            'totalHargaProduk' => [
                'type' => 'INT',
                'constraint' => '30',
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
