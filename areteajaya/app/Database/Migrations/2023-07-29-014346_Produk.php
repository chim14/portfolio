<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idProduk' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kodeProduk' => [
                'type'          => 'VARCHAR',
                'constraint'    => 10,
                'auto_increment' => true,
                'null'          => false,
            ],
            'namaProduk' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100',
            ],
            'slugKategori' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'unitProduk' => [
                'type'          => 'VARCHAR',
                'constraint'    => '10',
            ],
            'hargaProduk' => [
                'type'          => 'int',
                'constraint'    => 10,
                'null'          => false,
            ],
            'tanggalInputProduk' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'tanggalUbahProduk' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('idProduk', true);
        $this->forge->createTable('produk');
    }

    public function down()
    {
        $this->forge->dropTable('produk');
    }
}
