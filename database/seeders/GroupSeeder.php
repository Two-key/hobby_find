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
            'user_id' => '1',
            'category_id' => '1',
            'title' => '1グループ',
            'overview' => '私たちは読書好きなグループです',
            'image_url' => 'https://res.cloudinary.com/dpbph7hyn/image/upload/v1692713967/tg6gnc5wmfwlvogzessu.png',
                
         ]);
          DB::table('groups')->insert([
            'user_id' => '2',
            'category_id' => '2',
            'title' => '2グループ',
            'overview' => '私たちは映画好きなグループです',
            'image_url' => 'https://res.cloudinary.com/dpbph7hyn/image/upload/v1693447427/gyvpucbt5kpcyzo40x2b.png',
                
         ]);
         
    }
}
