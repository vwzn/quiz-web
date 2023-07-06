<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'nama' => 'Produk A',
                'status' => 'Tersedia',
                'stok' => 10,
                'harga' => 100000,
            ],
            [
                'nama' => 'Produk B',
                'status' => 'Tersedia',
                'stok' => 5,
                'harga' => 150000,
            ],
            [
                'nama' => 'Produk C',
                'status' => 'Habis',
                'stok' => 0,
                'harga' => 75000,
            ],
            [
                'nama' => 'Produk D',
                'status' => 'Tersedia',
                'stok' => 8,
                'harga' => 200000,
            ],
            [
                'nama' => 'Produk E',
                'status' => 'Tersedia',
                'stok' => 3,
                'harga' => 120000,
            ],
        ];

        DB::table('products')->insert($products);
    }
}
