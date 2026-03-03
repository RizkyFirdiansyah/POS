<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stoks = [];
        $user_id = 1; // ID pengguna admin

        // Stok awal untuk semua barang
        for ($barang_id = 1; $barang_id <= 15; $barang_id++) {
            // Setiap barang dari supplier yang berbeda
            $supplier_id = ceil($barang_id / 5); // 1-5: supplier 1, 6-10: supplier 2, 11-15: supplier 3

            $stoks[] = [
                'stok_id' => $barang_id,
                'supplier_id' => $supplier_id,
                'barang_id' => $barang_id,
                'user_id' => $user_id,
                'stok_tanggal' => Carbon::now()->subDays(rand(1, 30)),
                'stok_jumlah' => rand(20, 100), // Stok awal 20-100 unit
            ];
        }

        DB::table('t_stok')->insert($stoks);
    }
}
