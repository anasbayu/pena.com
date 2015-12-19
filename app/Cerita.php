<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cerita extends Model
{
   protected $table = "feeds";
   protected $primaryKey = "idCerita";

   public function pengarang()
   {
      return $this->hasOne('App\User');
   }
}
