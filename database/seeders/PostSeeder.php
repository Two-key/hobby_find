<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('posts')->insert([
            'title' => '読書会',
            'comment' => '今日はみんなで読書しました',
            'group_id' => '1',
            ]);
        DB::table('posts')->insert([
            'title' => '映画鑑賞会',
            'comment' => 'アクション映画を鑑賞しました',
            'group_id' => '2',
            ]);
    }
}
