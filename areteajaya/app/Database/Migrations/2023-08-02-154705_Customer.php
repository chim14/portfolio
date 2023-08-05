<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customer extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idCustomer' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'namaCustomer' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
                'null' => false,
            ],
            'noCustomer' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => false,
            ],
            'emailCustomer' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ],
            'alamatCustomer' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('idCustomer', true);
        $this->forge->createTable('customer');
    }

    public function down()
    {
        $this->forge->dropTable('customer');
    }
}
