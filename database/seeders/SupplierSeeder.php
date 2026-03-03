<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suppliers = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'PT. Sumber Rejeki',
                'supplier_alamat' => 'Jl. Industri No. 123, Jakarta',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'CV. Maju Bersama',
                'supplier_alamat' => 'Jl. Raya Bogor Km. 32, Depok',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'UD. Sukses Abadi',
                'supplier_alamat' => 'Jl. Gatot Subroto No. 45, Bandung',
            ],
        ];
        DB::table('m_supplier')->insert($suppliers);
    }
}
