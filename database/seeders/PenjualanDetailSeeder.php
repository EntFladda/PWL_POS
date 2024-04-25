<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Ambil semua transaksi penjualan
        $penjualan_ids = range(1, 10);
        foreach ($penjualan_ids as $penjualan_id) {
            // Ambil 3 barang secara acak untuk setiap transaksi penjualan
            $barang_ids = range(1, 10);
            shuffle($barang_ids);
            $selected_barang_ids = array_slice($barang_ids, 0, 3);

            foreach ($selected_barang_ids as $barang_id) {
                DB::table('t_penjualan_detail')->insert([
                    'penjualan_id' => $penjualan_id,
                    'barang_id' => $barang_id,
                    'harga' => rand(5000, 200000), // Harga acak antara 5000 dan 200000
                    'jumlah' => rand(1, 5), // Jumlah acak antara 1 dan 5
                ]);
            }
        }
    }
}