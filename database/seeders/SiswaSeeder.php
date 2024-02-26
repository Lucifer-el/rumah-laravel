<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $getIdKelas = DB::table("kelases")->InsertGetId([
            'id_kelas' => rand(1,25),
            'nama_kelas' => str::random(10),
            'kompetensi_keahlian' => str::random(50),
        ]);

        $getIdSpp = DB::table("spps")->InsertGetId([
            'id_spp' => rand(1, 10),
            'tahun' => random_int(2000, 2024),
            'nominal' => random_int(1, 20),
        ]);

        DB::table("siswas")->insert([
            'nisn' => rand(1, 50),
            'nis' => rand(1, 10),
            'nama' => "Dimas",
            'id_kelas' => $getIdKelas,
            'alamat' => "Bekasi",
            'no_telp' => "081282723922",
            'id_spp' => $getIdSpp,
        ]);
    }
}
