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
      $user = NEW User;
      $user->username = $request->username;
      $user->password = Hash::make($request->pass);
      $user->save();

      return redirect()->action('ceritaController@feeds');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user = User::find(1);
      return $user->username;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function login(Request $request)
    {
      $user = array('username' => $request->username,
                    'password' => $request->pass);

      $auth = Auth::attempt(array('username' => $user['username'],
                              'password' => $user['password']));
      if($auth)
      {
         // return 'yeay';
         return redirect('feed');
      }
      else
      {
         // return Auth::check();
         return "Hai " .  $user['username'] . ", pass: " . $user['password'] . " a $auth";
      }
    }
}
