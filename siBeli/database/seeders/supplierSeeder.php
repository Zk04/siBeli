<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class supplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('en_EN');
        
        $offset = 100; 
        $limit = 0;

        for ($i = 1; $i <= 40; $i++) {
            DB::table('suppliers')->insert([
                'kd_supplier' => 'KS00'.$i,
                'nama_supplier' => $faker->company,
                'alamat' => $faker->address,
            ]);
        }
    }
}