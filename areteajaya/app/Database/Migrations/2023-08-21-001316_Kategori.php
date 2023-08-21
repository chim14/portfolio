<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategori extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idKategori' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'namaKategori' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'slugKategori' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tanggalInput' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'tanggalUbah' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('idKategori', true);
        $this->forge->createTable('kategoriProduk');
    }

    public function down()
    {
        $this->forge->dropTable('kategoriProduk');
    }
}
