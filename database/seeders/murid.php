<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class murid extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('murid')->insert([
            'nis' => '1201',
            'nama' => 'kuda lumping',
            'asal_sekolah' => 'SDN Kulalet 1',
            'angkatan' => '2001'
        ]);
    }
}
