<?php namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
  public function users()
  {
        return $this->belongsToMany('App\Role', 'role_user', 'role_id', 'user_id');
  }
}