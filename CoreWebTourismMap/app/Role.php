<?php namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $fillable=['name','display_name','description'];
   
  public function users()
  {
      return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
  }
  public function permissions(){
            return $this->belongsToMany('App/Permission','permission_id','role_id');
  }
}