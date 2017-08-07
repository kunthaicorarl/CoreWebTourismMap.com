<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    

         DB::table('roles')->insert([
            'name' => 'owner',
            'display_name' => 'Project Owner',
            'description' => 'User is the owner of a given project',
          ]);
          DB::table('roles')->insert([
            'name' => 'admin',
            'display_name' => 'User Administrator',
            'description' => 'User is allowed to manage and edit other user',
    
          ]);

          $user = App\User::where('name', '=', 'admin')->first();

// role attach alias
$user->attachRole($admin); // parameter can be an Role object, array, or id

// or eloquent's original technique
$user->roles()->attach($admin->id); // id only
    }
}
