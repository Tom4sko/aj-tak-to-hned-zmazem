<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Work'],
            ['name' => 'Personal'],
            ['name' => 'Shopping'],
            ['name' => 'Ideas'],
        ]);
    }
}
