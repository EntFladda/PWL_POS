<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate 10 transaksi penjualan
        for ($i = 1; $i <= 10; $i++) {
            DB::table('t_penjualan')->insert([
                'user_id' => 1, // Sesuaikan dengan ID pengguna yang sesuai
                'pembeli' => 'Customer ' . $i,
                'penjualan_kode' => 'PJN00' . $i,
                'penjualan_tanggal' => now(),
            ]);
        }
    }
}