<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Image;
use App\Cerita;
use App\User;

class pageController extends Controller
{

   public function home()
   {
      if(Auth::check())
      {
         return redirect('feed');
      }
      else
      {
         return view('homepage');
      }
   }

   public function profil()
   {
      if(Auth::check())
      {
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
        return redirect('feed');
     }
     else
     {
        return redirect('/');
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
      $user->nama = $req->nama;
      $user->linkfb = $req->linkfb;
      $user->linktwitter = $req->linktwitter;
      $user->linkinstagram = $req->linkinstagram;
      $user->deskripsi = $req->deskripsi;

      // Profpic
      $gambar = $req->file('profPic');
      if($gambar != null)
      {
         $path = public_path('images\profPic');
         // $url = url('/public/images/profPic');
         $url ="public/images/profPic";
         $nama = $gambar->getClientOriginalName();

         // $gambarProfPic = Image::make($gambar)->resize(200, 200);
         $gambar->move($path, $nama);
         $user->profPic = $url . "/"  .$nama;
         // $gambarProfPic->save('public/images/profPic/anu.jpg');
      }

      // cover
      $cover = $req->file('cover');
      if($cover != null)
      {
         $pathCover = public_path('images\cover');
         $urlCover = "public/images/cover";
         $namaCover = $cover->getClientOriginalName();
         $cover->move($pathCover, $namaCover);
         $user->cover = $urlCover . "/" . $namaCover;
      }

      $user->save();

      return redirect('profil');

      // return dd($path);
   }

   public function follow($id)
   {

   }
}
