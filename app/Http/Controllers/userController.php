<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
USE App\User;
use Auth;
use Hash;
use Illuminate\Contracts\Auth\Authenticable;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $user = User::all();;
      // return $user;
      return view('daftar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user = new User;
      $user->username = $request->username;
      $user->nama = $request->username;
      $user->email = $request->email;
      $user->password = Hash::make($request->pass);
      $user->save();

      return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      if(Auth::check())
      {
         $user = User::findOrFail($id);
         $currentUser = Auth::user();

         // Jika user yang dimaksud adalah dirinya sendiri, kembalikan ke profi.
         if($currentUser->id == $user->id)
         {
            return redirect('profil');
         }
         else
         {
            return view('profil')->with('user', $user);
         }
      }
      else
      {
         return redirect('/');
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      if(Auth::check())
      {
         $user = Auth::user();
         return view('editUser')->with('user', $user);
      }
      else
      {
         return redirect('/');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // $user = Auth::user();
      // $user->email = $request->email;
      // $user->save();
      return "aa";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
