<?php namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $fillable=['name','display_name','description'];
   
     public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_user', 'role_id', 'user_id');
    }
}