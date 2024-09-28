<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class masukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suppliers = DB::table('suppliers')->pluck('kd_supplier')->toArray();

        $masuks = [
            [
                'kd_masuk' => 'M001',
                'tgl_masuk' => '2024-09-01',
                'kd_supplier' => $suppliers[0], 
                'total_masuk' => 100
            ],
            [
                'kd_masuk' => 'M002',
                'tgl_masuk' => '2024-09-05',
                'kd_supplier' => $suppliers[1], 
                'total_masuk' => 150
            ],
            [
                'kd_masuk' => 'M003',
                'tgl_masuk' => '2024-09-10',
                'kd_supplier' => $suppliers[2], 
                'total_masuk' => 200
            ],
            [
                'kd_masuk' => 'M004',
                'tgl_masuk' => '2024-09-15',
                'kd_supplier' => $suppliers[3], 
                'total_masuk' => 50
            ],
        ];
        
        $limit = 50;   // Number of records to insert
        $offset = 0;

        DB::table('masuks')->insert($masuks);
    }
}
