<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Cerita;
use App\User;

class pageController extends Controller
{
   public function cekAuth()
   {
      if(Auth::check())
      {
         return "yey";
      }
      else
      {
         return redirect('/');
      }
   }

   public function home()
   {
      if(Auth::check())
      {
         return redirect('feed');
      }
      else
      {
         // return "kk";
         return view('homepage');
      }
   }

   public function profil()
   {
      if(Auth::check())
      {
      // $this->cekAuth();
         $user = Auth::user();

         if(isset($user))
         {
            return view('profil')->with('user', $user);
         }
         else
         {
            return view('profil');
         }
      }
      else
      {
         return redirect('/');
      }
   }

   public function feeds()
   {
      if(Auth::check())
      {
         // $this->cekAuth();
         $feeds = Cerita::all();
         $pengarang = array();
         foreach ($feeds as $feed)
         {
            $pengarang = User::find($feed->idPenulis);
         }

         return view('feed')->with('feeds', $feeds)->with('pengarang', $pengarang);
      }
      else
      {
         return redirect('/');
      }
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

   public function logout()
   {
      Auth::logout();
      return redirect('/');
   }

   public function cerita($id)
   {
      if(Auth::check())
      {
         $cerita = Cerita::findOrFail($id);
         $views = $cerita->views;
         $views += 1;
         $cerita->views = $views;
         $cerita->save();
         return view('cerita')->with('cerita', $cerita);
      }
      else
      {
         return redirect('/');
      }
   }

   public function like($id)
   {
      $cerita = Cerita::findOrFail($id);
      $jumLike = $cerita->likes;
      $jumLike += 1;
      $cerita->likes = $jumLike;

      return "a";
   }

   public function update(Request $req)
   {
      $user = Auth::user();
      $user->email = $req->email;
      // $user->nama = $req->nama;
      $user->linkfb = $req->linkfb;
      $user->linktwitter = $req->linktwitter;
      $user->linkinstagram = $req->linkinstagram;
      $user->deskripsi = $req->deskripsi;
      $user->save();
      return redirect('profil');
   }
}
