<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pendapatan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idPendapatan' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'invoicePemesanan' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => false,
            ],
            'namaCustomer' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => false,
            ],
            'jumlahPemesanan' => [
                'type' => 'INT',
                'constraint' => '25',
                'null' => false,
            ],
            'tanggalPemesanan' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('idPendapatan', true);
        $this->forge->createTable('pendapatan');
    }

    public function down()
    {
        $this->forge->dropTable('pendapatan');
    }
}
