<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class authController extends Controller
{
   public function authenticate()
    {
        if (auth()->attempt(['username' => 'anasbayu', 'password' => 'anas123']))
        {
            return "yey";
        }
        else
        {
           return "aduh";
        }
    }
}
