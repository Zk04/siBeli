<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Pastikan untuk mengimpor DB

class TbarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbarangs')->insert([
            [
                'kdBarang' => 'AR001',
                'namaBarang' => 'Sabun Mandi',
                'satuan' => 'Pcs',
                'hargaJual' => 15000,
                'hargaBeli' => 10000,
                'stok' => 100,
                'status' => 'Aktif'
            ],
            [
                'kdBarang' => 'AR002',
                'namaBarang' => 'sabun muka',
                'satuan' => 'Pcs',
                'hargaJual' => 20000,
                'hargaBeli' => 12000,
                'stok' => 80,
                'status' => 'Aktif'
            ],
            [
                'kdBarang' => 'AR003',
                'namaBarang' => 'sikat Gigi',
                'satuan' => 'Pcs',
                'hargaJual' => 10000,
                'hargaBeli' => 7000,
                'stok' => 150,
                'status' => 'Aktif'
            ],
            [
                'kdBarang' => 'AR004',
                'namaBarang' => 'Deodoran',
                'satuan' => 'Pcs',
                'hargaJual' => 25000,
                'hargaBeli' => 15000,
                'stok' => 60,
                'status' => 'Aktif'
            ],
            [
                'kdBarang' => 'AR005',
                'namaBarang' => 'Tissue',
                'satuan' => 'Lembar',
                'hargaJual' => 5000,
                'hargaBeli' => 3000,
                'stok' => 200,
                'status' => 'Aktif'
            ],
            [
                'kdBarang' => 'AR006',
                'namaBarang' => 'Sabun Cuci',
                'satuan' => 'Pcs',
                'hargaJual' => 8000,
                'hargaBeli' => 5000,
                'stok' => 150,
                'status' => 'Aktif'
            ],
            [
                'kdBarang' => 'AR007',
                'namaBarang' => 'Odol',
                'satuan' => 'Pcs',
                'hargaJual' => 6000,
                'hargaBeli' => 4000,
                'stok' => 120,
                'status' => 'Aktif'
            ],
            [
                'kdBarang' => 'AR008',
                'namaBarang' => 'Wipol',
                'satuan' => 'Pcs',
                'hargaJual' => 30000,
                'hargaBeli' => 20000,
                'stok' => 50,
                'status' => 'Aktif'
            ],
            [
                'kdBarang' => 'AR009',
                'namaBarang' => 'Pembersih Lantai',
                'satuan' => 'Pcs',
                'hargaJual' => 25000,
                'hargaBeli' => 15000,
                'stok' => 70,
                'status' => 'Aktif'
            ],
            [
                'kdBarang' => 'AR010',
                'namaBarang' => 'Parfum',
                'satuan' => 'Pcs',
                'hargaJual' => 22000,
                'hargaBeli' => 16000,
                'stok' => 40,
                'status' => 'Aktif'
            ],
        ]); // Tambahkan tanda titik koma di akhir
    }
}