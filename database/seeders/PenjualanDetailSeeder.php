<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $details = [];
        $detail_id = 1;

        // Untuk setiap transaksi (1-10)
        for ($penjualan_id = 1; $penjualan_id <= 10; $penjualan_id++) {
            // 3 barang random 
            $barang_terpilih = array_rand(range(1, 15), 3);

            foreach ($barang_terpilih as $barang_id) {
                $barang_id += 1; 
                $harga = $this->getHargaJual($barang_id);
                $jumlah = rand(1, 5);

                $details[] = [
                    'detail_id' => $detail_id++,
                    'penjualan_id' => $penjualan_id,
                    'barang_id' => $barang_id,
                    'harga' => $harga,
                    'jumlah' => $jumlah,
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($details);
    }

    private function getHargaJual($barang_id)
    {
        $harga_jual = [
            1 => 2750000,
            2 => 3500000,
            3 => 2000000,
            4 => 3100000,
            5 => 425000,
            6 => 45000,
            7 => 18000,
            8 => 3500,
            9 => 12000,
            10 => 5000,
            11 => 175000,
            12 => 225000,
            13 => 250000,
            14 => 299000,
            15 => 75000,
        ];

        return $harga_jual[$barang_id] ?? 0;
    }
}
