<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'category_id' => '1',
            'title' => '1グループ',
            'overview' => '私たちは読書好きなグループです',
                
         ]);
          DB::table('groups')->insert([
            'category_id' => '2',
            'title' => '2グループ',
            'overview' => '私たちは映画好きなグループです',
                
         ]);
         
    }
}
