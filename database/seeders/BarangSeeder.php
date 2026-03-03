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
        $barangs = [
            ['barang_kode' => 'BRG001', 'barang_nama' => 'Smart TV 32 Inch', 'kategori_id' => 1, 'harga_beli' => 2500000, 'harga_jual' => 2750000],
            ['barang_kode' => 'BRG002', 'barang_nama' => 'Kulkas 2 Pintu', 'kategori_id' => 1, 'harga_beli' => 3200000, 'harga_jual' => 3500000],
            ['barang_kode' => 'BRG003', 'barang_nama' => 'Mesin Cuci', 'kategori_id' => 1, 'harga_beli' => 1800000, 'harga_jual' => 2000000],
            ['barang_kode' => 'BRG004', 'barang_nama' => 'Air Conditioner 1 PK', 'kategori_id' => 1, 'harga_beli' => 2800000, 'harga_jual' => 3100000],
            ['barang_kode' => 'BRG005', 'barang_nama' => 'Kipas Angin', 'kategori_id' => 1, 'harga_beli' => 350000, 'harga_jual' => 425000],
            ['barang_kode' => 'BRG006', 'barang_nama' => 'Kopi Bubuk 200gr', 'kategori_id' => 2, 'harga_beli' => 35000, 'harga_jual' => 45000],
            ['barang_kode' => 'BRG007', 'barang_nama' => 'Teh Celup 25pcs', 'kategori_id' => 2, 'harga_beli' => 12000, 'harga_jual' => 18000],
            ['barang_kode' => 'BRG008', 'barang_nama' => 'Mie Instan', 'kategori_id' => 2, 'harga_beli' => 2500, 'harga_jual' => 3500],
            ['barang_kode' => 'BRG009', 'barang_nama' => 'Biskuit', 'kategori_id' => 2, 'harga_beli' => 8000, 'harga_jual' => 12000],
            ['barang_kode' => 'BRG010', 'barang_nama' => 'Air Mineral 600ml', 'kategori_id' => 2, 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['barang_kode' => 'BRG011', 'barang_nama' => 'Kemeja Pria', 'kategori_id' => 3, 'harga_beli' => 120000, 'harga_jual' => 175000],
            ['barang_kode' => 'BRG012', 'barang_nama' => 'Celana Jeans', 'kategori_id' => 3, 'harga_beli' => 150000, 'harga_jual' => 225000],
            ['barang_kode' => 'BRG013', 'barang_nama' => 'Jaket Hoodie', 'kategori_id' => 3, 'harga_beli' => 180000, 'harga_jual' => 250000],
            ['barang_kode' => 'BRG014', 'barang_nama' => 'Sepatu Sport', 'kategori_id' => 3, 'harga_beli' => 200000, 'harga_jual' => 299000],
            ['barang_kode' => 'BRG015', 'barang_nama' => 'Topi Baseball', 'kategori_id' => 3, 'harga_beli' => 45000, 'harga_jual' => 75000],
        ];

        DB::table('m_barang')->insert($barangs);
    }
}
