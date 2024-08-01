<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(HariSeeder::class);
        $this->call(KehadiranSeeder::class);
        $this->call(MapelSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(KelasSeeder::class);
        }
    
}
