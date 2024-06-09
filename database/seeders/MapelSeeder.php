<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('mapel')->insert([
            'id' => 1,
            'nama_mapel' => 'Bahasa Indonesia',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 2,
            'nama_mapel' => 'Bahasa Inggris',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 3,
            'nama_mapel' => 'Matematika',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 4,
            'nama_mapel' => 'Pendidikan Agama dan Budi Pekerti',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 5,
            'nama_mapel' => 'Pendidikan Pancasila dan Kewarganegaraan',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        }
}
