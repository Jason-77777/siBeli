<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->truncate(); 
        $faker = Faker::create(); 

        
        $suppliers = [];
        for ($i = 0; $i < 30; $i++) { 
            $suppliers[] = [
                'kd_supplier' => 'S' . str_pad($i + 1, 3, '0', STR_PAD_LEFT), 
                'nama_supplier' => $faker->company, 
                'alamat' => $faker->address, 
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('suppliers')->insert($suppliers);
    }
}
