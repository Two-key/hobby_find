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
            'title' => '読書同好会',
            'overview' => '私たちは読書好きなグループです',
            'image_url' => 'https://res.cloudinary.com/dpbph7hyn/image/upload/v1696174790/book4_red_le9whh.png',
                
         ]);
          DB::table('groups')->insert([
            'user_id' => '2',
            'category_id' => '2',
            'title' => 'ホラー映画大好き',
            'overview' => '私たちはホラー映画が好きなグループです',
            'image_url' => 'https://res.cloudinary.com/dpbph7hyn/image/upload/v1693447427/gyvpucbt5kpcyzo40x2b.png',
                
         ]);
         
    }
}
