<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID'); 

        for ($i = 1; $i <= 50; $i++) {
            DB::table('masuks')->insert([
                'kd_masuk' => 'MSK'.$i,
                'tgl_masuk' => $faker->date(), 
                'kd_admin' => 'ADM' . $faker->unique()->numerify('####'), 
                'kd_supplier' => 'SUP' . $faker->unique()->numerify('####'), 
                'total_masuk' => $faker->randomFloat(2, 10000, 1000000), 
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
