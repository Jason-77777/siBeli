<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->truncate(); 
        $faker = Faker::create(); 
        $dMasuks = [];
        for ($i = 0; $i < 20; $i++) { 
            $dMasuks[] = [
                'id_masuk' => $faker->unique()->bothify('IDM-####'), 
                'kd_barang_beli' => $faker->unique()->bothify('KB-#####'), 
                'jumlah' => $faker->numberBetween(1, 100), 
                'subtotal' => $faker->randomFloat(2, 10, 1000),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('d_masuks')->insert($dMasuks);
    }
}
