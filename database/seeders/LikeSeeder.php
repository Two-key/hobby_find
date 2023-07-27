<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('joins')->insert([
            'user_id' => '1',
            'group_id' => '1',
            ]);
        DB::table('joins')->insert([
            'user_id' => '1',
            'group_id' => '2',
            ]);
    }
}
