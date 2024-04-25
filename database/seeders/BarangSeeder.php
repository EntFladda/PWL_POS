<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_barang')->insert([
            ['kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Laptop HP', 'harga_beli' => 5000000, 'harga_jual' => 6000000],
            ['kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Smartphone Samsung', 'harga_beli' => 3000000, 'harga_jual' => 3500000],
            ['kategori_id' => 2, 'barang_kode' => 'BRG003', 'barang_nama' => 'Kemeja Putih', 'harga_beli' => 200000, 'harga_jual' => 250000],
            ['kategori_id' => 2, 'barang_kode' => 'BRG004', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 250000, 'harga_jual' => 300000],
            ['kategori_id' => 3, 'barang_kode' => 'BRG005', 'barang_nama' => 'Pensil 2B', 'harga_beli' => 5000, 'harga_jual' => 7000],
            ['kategori_id' => 3, 'barang_kode' => 'BRG006', 'barang_nama' => 'Penghapus', 'harga_beli' => 2000, 'harga_jual' => 3000],
            ['kategori_id' => 4, 'barang_kode' => 'BRG007', 'barang_nama' => 'Meja Belajar', 'harga_beli' => 1000000, 'harga_jual' => 1200000],
            ['kategori_id' => 4, 'barang_kode' => 'BRG008', 'barang_nama' => 'Kursi Lipat', 'harga_beli' => 500000, 'harga_jual' => 600000],
            ['kategori_id' => 5, 'barang_kode' => 'BRG009', 'barang_nama' => 'Boneka Beruang', 'harga_beli' => 100000, 'harga_jual' => 150000],
            ['kategori_id' => 5, 'barang_kode' => 'BRG010', 'barang_nama' => 'Mobil-Mobilan', 'harga_beli' => 200000, 'harga_jual' => 250000],
        ]);
        
    }
}