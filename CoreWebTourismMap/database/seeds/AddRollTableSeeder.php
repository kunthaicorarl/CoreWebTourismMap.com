<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
class AddRollTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('name', '=', 'admin')->first();

// role attach alias
$user->attachRole($admin); // parameter can be an Role object, array, or id

// or eloquent's original technique
$user->roles()->attach($admin->id); // id only
    }
}
