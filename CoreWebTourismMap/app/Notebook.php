<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Notebook extends Model
{
 //protected $fillable=['user_id','name','description'];
 public function users()
{
        return $this->belongsTo(User::class,'user_id','id');
}
}
