<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
            [
                'nomor_transaksi' => 'TRX001',
                'product_id' => 1,
                'qty' => 2,
                'total_harga' => 200000,
            ],
            [
                'nomor_transaksi' => 'TRX002',
                'product_id' => 3,
                'qty' => 1,
                'total_harga' => 75000,
            ],
            [
                'nomor_transaksi' => 'TRX003',
                'product_id' => 2,
                'qty' => 3,
                'total_harga' => 450000,
            ],
        ];

        DB::table('transaksis')->insert($transaksis);
    }
}
