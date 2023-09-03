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
            'category_name' => '読書',
            ]);
        DB::table('categories')->insert([
            'category_id' => '2',
            'category_name' => '映画',
            ]);
        DB::table('categories')->insert([
            'category_id' => '3',
            'category_name' => '旅行',
            ]);
        DB::table('categories')->insert([
            'category_id' => '4',
            'category_name' => '音楽',
            ]);
        DB::table('categories')->insert([
            'category_id' => '5',
            'category_name' => 'その他',
            ]);
    }
}
