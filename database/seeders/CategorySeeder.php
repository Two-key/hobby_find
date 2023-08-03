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
        DB::table('categories')->insert([
            'category_id' => '1',
            'category_name' => 'Reading',
            ]);
        DB::table('categories')->insert([
            'category_id' => '2',
            'category_name' => 'Watching movies',
            ]);
        DB::table('categories')->insert([
            'category_id' => '3',
            'category_name' => 'Traveling',
            ]);
        DB::table('categories')->insert([
            'category_id' => '4',
            'category_name' => 'Music',
            ]);
    }
}
