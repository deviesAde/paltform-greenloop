<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Alat Rumah Tangga', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fasion', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dur Ulang', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
