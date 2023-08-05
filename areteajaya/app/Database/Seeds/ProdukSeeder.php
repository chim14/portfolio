<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 1; $i <= 20; $i++) {

            $data = [
                'kodeProduk' => '$faker->kodeProduk',
                'namaProduk' => '$faker->name',
                'idKategori' => '$faker->idKategori',
                'unitProduk' => '$faker->unitProduk',
                'hargaProduk' => '$faker->hargaProduk',
            ];

            // Using Query Builder
            $this->db->table('produk')->insert($data);
        }
    }
}
