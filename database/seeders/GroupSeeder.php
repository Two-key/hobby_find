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
                'title' => '1グループ',
                'overview' => '私たちは◯◯なグループです',
         ]);
          DB::table('groups')->insert([
                'title' => '2グループ',
                'overview' => '私たちは◯◯なグループです',
         ]);
         
    }
}
