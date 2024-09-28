<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barangs = [
            [
                'kd_barang' => '0001',
                'nama_barang' => 'Product A',
                'satuan' => 'pcs',
                'harga_jual' => 15000,
                'harga_beli' => 10000,
                'stok' => 50,
                'status' => true,
            ],
            [
                'kd_barang' => '0002',
                'nama_barang' => 'Product B',
                'satuan' => 'unit',
                'harga_jual' => 30000,
                'harga_beli' => 20000,
                'stok' => 30,
                'status' => true,
            ],
            [
                'kd_barang' => '0003',
                'nama_barang' => 'Product C',
                'satuan' => 'box',
                'harga_jual' => 45000,
                'harga_beli' => 35000,
                'stok' => 20,
                'status' => true,
            ],
            [
                'kd_barang' => '0004',
                'nama_barang' => 'Product D',
                'satuan' => 'unit',
                'harga_jual' => 60000,
                'harga_beli' => 50000,
                'stok' => 10,
                'status' => false,
            ],
            [
                'kd_barang' => '0005',
                'nama_barang' => 'Product E',
                'satuan' => 'box',
                'harga_jual' => 80000,
                'harga_beli' => 70000,
                'stok' => 25,
                'status' => true,
            ],
            [
                'kd_barang' => '0006',
                'nama_barang' => 'Product F',
                'satuan' => 'pcs',
                'harga_jual' => 120000,
                'harga_beli' => 90000,
                'stok' => 15,
                'status' => true,
            ],
            [
                'kd_barang' => '0007',
                'nama_barang' => 'Product G',
                'satuan' => 'unit',
                'harga_jual' => 95000,
                'harga_beli' => 80000,
                'stok' => 40,
                'status' => false,
            ],
            [
                'kd_barang' => '0008',
                'nama_barang' => 'Product H',
                'satuan' => 'pcs',
                'harga_jual' => 110000,
                'harga_beli' => 95000,
                'stok' => 5,
                'status' => true,
            ],
            [
                'kd_barang' => '0009',
                'nama_barang' => 'Product I',
                'satuan' => 'box',
                'harga_jual' => 130000,
                'harga_beli' => 110000,
                'stok' => 60,
                'status' => true,
            ],
            [
                'kd_barang' => '0010',
                'nama_barang' => 'Product J',
                'satuan' => 'unit',
                'harga_jual' => 200000,
                'harga_beli' => 150000,
                'stok' => 30,
                'status' => true,
            ],
        ];
        // Define limit and offset
        $limit = 50;   // Number of records to insert
        $offset = 0;  // Start inserting from the 3rd element (index 2)

        // Use array_slice to apply limit and offset
        $barangsToInsert = array_slice($barangs, $offset, $limit);

        // Insert limited products into the barangs table
        DB::table('barangs')->insert($barangsToInsert);
        
    }
}
