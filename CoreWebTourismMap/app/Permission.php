<?php namespace App;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
     protected $fillable=['name','description','display_name'];
     public function roles(){
            return $this->belongsToMany('App/Role','role_id','permission_id');
     }
}