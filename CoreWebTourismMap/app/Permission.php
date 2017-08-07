<?php namespace App;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    public function users()
    {
        return $this->belongsToMany('User');
    }
}