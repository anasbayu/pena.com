<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cerita extends Model
{
   protected $table = "feeds";

   public function pengarang()
   {
      return $this->hasOne('App\User');
   }
}
