<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          User::create([
        	'name'=>'admin',
        	'email'=>'admin123@gmail.com',
        	'password'=> bcrypt('admin123'),
        	]);
           User::create([
        	'name'=>'author',
        	'email'=>'author@gmail.com',
        	'password'=> bcrypt('author123'),
        	]);
    }
}
