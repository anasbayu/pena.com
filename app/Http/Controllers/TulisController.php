<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TulisController extends Controller
{
    public function buatBaru()
    {
       return view('tulisBaru');
    }
}
