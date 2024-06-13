<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {    
        DB::table('kelas')->insert([
            'id' => 1,
            'nama_kelas' => 'MIM 1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kelas')->insert([
            'id' => 2,
            'nama_kelas' => 'MIM 2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kelas')->insert([
            'id' => 3,
            'nama_kelas' => 'MIM 3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]); 
        DB::table('kelas')->insert([
            'id' => 4,
            'nama_kelas' => 'MIM 4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]); 
        DB::table('kelas')->insert([
            'id' => 5,
            'nama_kelas' => 'MIM 5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]); 
        DB::table('kelas')->insert([
            'id' => 6,
            'nama_kelas' => 'MIM 6',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        }
}
