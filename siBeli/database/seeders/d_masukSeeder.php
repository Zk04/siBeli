<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class d_masukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = DB::table('barangs')->pluck('harga_beli', 'kd_barang')->toArray();
        $masuks = DB::table('masuks')->pluck('kd_masuk')->toArray();
        $d_masuks = [
            [
                'id_masuk' => 'DM001',
                'kd_masuk' => $masuks[1],
                'kd_barang_beli' => '0001', // Product A
                'jumlah' => 2,  // Quantity
                'subtotal' => 2 * $products['0001'], // Fetch harga_beli from the array
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'DM002',
                'kd_masuk' => $masuks[1],
                'kd_barang_beli' => '0002', // Product B
                'jumlah' => 1,
                'subtotal' => 1 * $products['0002'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'DM003',
                'kd_masuk' => $masuks[3],
                'kd_barang_beli' => '0003', // Product C
                'jumlah' => 1,
                'subtotal' => 1 * $products['0003'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'DM004',
                'kd_masuk' => $masuks[1],
                'kd_barang_beli' => '0004', // Product D
                'jumlah' => 1,
                'subtotal' => 1 * $products['0004'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'DM005',
                'kd_masuk' => $masuks[2],
                'kd_barang_beli' => '0005', // Product E
                'jumlah' => 1,
                'subtotal' => 1 * $products['0005'],
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Entries for PO002
            [
                'id_masuk' => 'DM006',
                'kd_masuk' => $masuks[1],
                'kd_barang_beli' => '0006', // Product F
                'jumlah' => 2,
                'subtotal' => 2 * $products['0006'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'DM007',
                'kd_masuk' => $masuks[2],
                'kd_barang_beli' => '0007', // Product G
                'jumlah' => 2,
                'subtotal' => 2 * $products['0007'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'DM008',
                'kd_masuk' => $masuks[2],
                'kd_barang_beli' => '0008', // Product H
                'jumlah' => 1,
                'subtotal' => 1 * $products['0008'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'DM009',
                'kd_masuk' => $masuks[1],
                'kd_barang_beli' => '0009', // Product I
                'jumlah' => 1,
                'subtotal' => 1 * $products['0009'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'DM010',
                'kd_masuk' => $masuks[2],
                'kd_barang_beli' => '0010', // Product J
                'jumlah' => 1,
                'subtotal' => 1 * $products['0010'],
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Entries for PO003
            [
                'id_masuk' => 'DM011',
                'kd_masuk' => $masuks[2],
                'kd_barang_beli' => '0001', // Product A
                'jumlah' => 2,
                'subtotal' => 2 * $products['0001'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'DM012',
                'kd_masuk' => $masuks[1],
                'kd_barang_beli' => '0002', // Product B
                'jumlah' => 2,
                'subtotal' => 2 * $products['0002'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'DM013',
                'kd_masuk' => $masuks[1],
                'kd_barang_beli' => '0003', // Product C
                'jumlah' => 3,
                'subtotal' => 3 * $products['0003'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'DM014',
                'kd_masuk' => $masuks[2],
                'kd_barang_beli' => '0004', // Product D
                'jumlah' => 2,
                'subtotal' => 2 * $products['0004'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'DM015',
                'kd_masuk' => $masuks[3],
                'kd_barang_beli' => '0005', // Product E
                'jumlah' => 1,
                'subtotal' => 1 * $products['0005'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'DM016',
                'kd_masuk' => $masuks[3],
                'kd_barang_beli' => '0006', // Product F
                'jumlah' => 1,
                'subtotal' => 1 * $products['0006'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'DM017',
                'kd_masuk' => $masuks[1],
                'kd_barang_beli' => '0007', // Product G
                'jumlah' => 1,
                'subtotal' => 1 * $products['0007'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'DM018',
                'kd_masuk' => $masuks[2],
                'kd_barang_beli' => '0008', // Product H
                'jumlah' => 1,
                'subtotal' => 1 * $products['0008'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'DM019',
                'kd_masuk' => $masuks[3],
                'kd_barang_beli' => '0009', // Product I
                'jumlah' => 1,
                'subtotal' => 1 * $products['0009'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'DM020',
                'kd_masuk' => $masuks[2],
                'kd_barang_beli' => '0010', // Product J
                'jumlah' => 1,
                'subtotal' => 1 * $products['0010'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        $limit = 100;   // Number of records to insert
        $offset = 0; 
        DB::table('d_masuks')->insert($d_masuks);
    }
}
