<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class SppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("spps")->insert([
            'id_spp' => rand(1, 10),
            'tahun' => random_int(2000, 2024),
            'nominal' => random_int(1, 20),
        ]);
    }
}
