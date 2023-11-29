<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tambahkan data kasir ke dalam tabel kasir
        DB::table('kasir')->insert([
            'KodeKasir' => 'KS22151106201',
            'Nama' => 'Ani',
            'HP' => '08221511062375',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kasir')->insert([
            'KodeKasir' => 'KS22151106402',
            'Nama' => 'Budi',
            'HP' => '08221511062735',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Tambahkan lebih banyak data kasir sesuai kebutuhan
    }
}
