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
            'image_url' => 'https://res.cloudinary.com/dpbph7hyn/image/upload/v1692713967/tg6gnc5wmfwlvogzessu.png',
            ]);
        DB::table('posts')->insert([
            'title' => '映画鑑賞会',
            'comment' => 'アクション映画を鑑賞しました',
            'group_id' => '2',
            'image_url' => 'https://res.cloudinary.com/dpbph7hyn/image/upload/v1693447427/gyvpucbt5kpcyzo40x2b.png',
            ]);
    }
}
