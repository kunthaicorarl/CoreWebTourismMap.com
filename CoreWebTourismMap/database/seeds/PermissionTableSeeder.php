<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $permissions=[
             [
                 'name'=> 'role-read',
                 'display_name'=>'Create Read List',
                 'description'=>'This is roles'
             ],
              [
                 'name'=> 'role-edit',
                 'display_name'=>'Create edit List',
                 'description'=>'This is roles'
             ],
              [
                 'name'=> 'role-delete',
                 'display_name'=>'Create delete List',
                 'description'=>'This is roles'
             ], [
                 'name'=> 'role-update',
                 'display_name'=>'Create update List',
                 'description'=>'This is roles'
             ]

         ];
         foreach($permissions as $key=>$value){
             App\Permission::create($value);
         }
    }
}
