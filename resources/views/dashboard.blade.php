@extends('master')

@section('title')
   dashboard
@endsection

@section('script')

@endsection

@section('style')
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/dashboard.css')}}"/>
@endsection

@section('body')
   {{-- <div id="header">
      <img src="{{asset('public/images/icon.ico')}}" id="logo"/>
      <div id="menu">
         {{-- <ul>
            <li><a href="">Profil</a></li>
            <li><a href="">Tulis</a></li>
            <li><a href="">Keluar</a></li>
         </ul>
      </div>
   </div> --}}

   <div id="logo">
   </div>
   <div id="menu">
      <ul>
         <a href=""><li><b>Tulis</b></li></a>
         <a href=""><li><b>Profil</b></li></a>
         <a href=""><li><b>Keluar</b></li></a>
      </ul>
      {{-- <input type="text" placeholder="Cari cerita"/>
      <button>Cari</button> --}}
   </div>
   <div id="sideContent">
      <div id="global"></div>
   </div>
   <div id="feed">
      <div class="feedClass">
         <h2>Header 1</h2>
         <content>
            kontennya
         </content>
         <br><br><hr>
      </div>
      <div class="feedClass">
         <h2>Header 2</h2>
         <content>
            kontennya
         </content>
         <br><br><hr>
      </div>
      <div class="feedClass">
         <h2>Header 3</h2>
         <content>
            kontennya
         </content>
         <br><br><hr>
      </div>
   </div>

@endsection
