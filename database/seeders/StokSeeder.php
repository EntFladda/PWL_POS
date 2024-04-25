<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate stok untuk setiap barang
        $barang_ids = range(1, 10);
        foreach ($barang_ids as $barang_id) {
            DB::table('t_stok')->insert([
                'barang_id' => $barang_id,
                'user_id' => 1, // Sesuaikan dengan ID pengguna yang sesuai
                'penjualan_tanggal' => now(),
                'stok_jumlah' => rand(10, 100), // Stok acak antara 10 dan 100
            ]);
        }
    }
}