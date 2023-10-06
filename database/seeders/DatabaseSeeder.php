<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
            UserSeeder::class,
            GroupSeeder::class,
            CategorySeeder::class,
            PostSeeder::class,
            JoinSeeder::class,
            LikeSeeder::class,
            MessageSeeder::class,
        ]);
    }
}
