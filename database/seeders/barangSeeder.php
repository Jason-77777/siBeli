<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->truncate(); 
        $faker = Faker::create('id_ID'); 

        for ($i = 1; $i <= 50; $i++) {
            DB::table('barangs')->insert([
                'kd_barang' => 'BRG' . $i, 
                'nama_barang' => $faker->word(), 
                'satuan' => $faker->randomElement(['pcs', 'kg', 'liter']), 
                'harga_jual' => $faker->randomFloat(2, 10000, 100000), 
                'harga_beli' => $faker->randomFloat(2, 5000, 50000), 
                'stok' => $faker->numberBetween(1, 100), 
                'status' => $faker->randomElement(['Tersedia', 'Habis']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
