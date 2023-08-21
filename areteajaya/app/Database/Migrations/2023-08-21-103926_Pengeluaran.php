<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengeluaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idPengeluaran' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'typePengeluaran' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => false,
            ],
            'namaPengeluaran' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'jumlahPengeluaran' => [
                'type' => 'INT',
                'constraint' => '25',
                'null' => false,
            ],
            'tanggalPengeluaran' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'notePengeluaran' => [
                'type' => 'text',
                'constraint' => '100',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('idPengeluaran', true);
        $this->forge->createTable('pengeluaran');
    }

    public function down()
    {
        $this->forge->dropTable('pengeluaran');
    }
}
