<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin'.'@gmail.com',
            'password' => bcrypt('secret'),
          ]);
          DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user'.'@gmail.com',
            'password' => bcrypt('secret'),
          ]);
    }
}
