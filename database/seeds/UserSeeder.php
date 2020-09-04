<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
          [
            'id' => '1',
            'name' => Str::random(6),
            'email' => 'test1@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => true
          ],
          [
            'id' => '2',
            'name' => Str::random(6),
            'email' => 'test2@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => false
          ]
        ]);
    }
}
