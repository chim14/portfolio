<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idProduct' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Barcode' => [
                'type'          => 'VARCHAR',
                'constraint'    => 10,
                'auto_increment' => true,
                'null'          => false,
            ],
            'imageProduct' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null'          => true,
            ],
            'nameProduct' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100',
            ],
            'priceProduct' => [
                'type'          => 'int',
                'constraint'    => 10,
                'null'          => false,
            ],
        ]);
        $this->forge->addKey('idProduct', true);
        $this->forge->createTable('produk');
    }

    public function down()
    {
        $this->forge->dropTable('produk');
    }
}
