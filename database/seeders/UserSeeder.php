<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'leader_id' => '1',
            'age' => 20,
            'name' => 'Rena',
            'email' => '21ue006@mb2.fwu.ac.jp',
            'password' => Hash::make('password'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         DB::table('users')->insert([
            'leader_id' => '2',
            'age' => 20,
            'name' => 'Leader',
            'email' => 'a@a',
            'password' => Hash::make('password'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         DB::table('users')->insert([
            'leader_id' => '3',
            'age' => 20,
            'name' => 'Member1_group1',
            'email' => 'b@b',
            'password' => Hash::make('password'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         DB::table('users')->insert([
            'leader_id' => '4',
            'age' => 20,
            'name' => 'Member2_group1',
            'email' => 'c@c',
            'password' => Hash::make('password'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         DB::table('users')->insert([
            'leader_id' => '5',
            'age' => 20,
            'name' => 'Member3_group2',
            'email' => 'd@d',
            'password' => Hash::make('password'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
    }
}
