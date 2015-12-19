<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends \Eloquent implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
   use Authenticatable, Authorizable, CanResetPassword;

   protected $table = "users";
   protected $primaryKey = "id";
   protected $hidden = "pass";
   protected $fillable = array('email', 'deskripsi', 'linkfb', 'linktwitter', 'linkinstagram', 'profpic', 'cover');

   public function getAuthPass()
   {
      return $this->pass;
   }

   public function cerita()
   {
      return $this->hasMany('App\Cerita');
   }

   public function follower()
   {
      return $this->hasMany('App\Follower');
   }
}
