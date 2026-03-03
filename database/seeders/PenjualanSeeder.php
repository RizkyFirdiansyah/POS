<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penjualans = [];
        $pembelis = [
            'Budi Santoso',
            'Siti Aminah',
            'Ahmad Fauzi',
            'Dewi Lestari',
            'Rudi Hermawan',
            'Maya Sari',
            'Joko Widodo',
            'Rina Wijaya',
            'Hendra Gunawan',
            'Lisa Permata'
        ];

        // 10 transaksi penjualan
        for ($i = 1; $i <= 10; $i++) {
            $tanggal = Carbon::now()->subDays(rand(1, 60));

            $penjualans[] = [
                'penjualan_id' => $i,
                'user_id' => rand(2, 3), // Kasir 1 atau 2
                'pembeli' => $pembelis[$i - 1],
                'penjualan_kode' => 'TRX' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'penjualan_tanggal' => $tanggal,
            ];
        }

        DB::table('t_penjualan')->insert($penjualans);
    }
}
