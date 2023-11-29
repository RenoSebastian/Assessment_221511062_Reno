<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tenan')->insert([
            'KodeTenan' => 'TK22151106201',
            'NamaTenan' => 'Renomaret',
            'HP' => '08221511062375',
        ]);

        DB::table('tenan')->insert([
            'KodeTenan' => 'TK22151106202',
            'NamaTenan' => 'Renomart',
            'HP' => '08221511062735',
        ]);
    }
}
