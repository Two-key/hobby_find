<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;　
use DateTime;　
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'category_name' => 'Reading',
            ]);
        DB::table('category')->insert([
            'category_name' => 'Watching movies',
            ]);
        DB::table('category')->insert([
            'category_name' => 'Traveling',
            ]);
        DB::table('category')->insert([
            'category_name' => 'Music',
            ]);
    }
}
