@extends('master')

@section('title')
   dashboard
@endsection

@section('script')
   <script src="{{ URL::asset('public/js/jquery-2.1.4.min.js') }}"></script>
   <script src="{{ URL::asset('public/js/header.js') }}"></script>
@endsection

@section('style')
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/dashboard.css')}}"/>
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/feedStyle.css')}}"/>
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/headerStyle.css')}}"/>
@endsection

@section('body')
   <div id="header">
      <img src="public/images/logoPenaPutih.png"/>
      <div id="menu">
         <ul>
            <a href=""><li><b>Tulis</b></li></a>
            <a href=""><li><b>Profil</b></li></a>
            <a href=""><li><b>Keluar</b></li></a>
         </ul>
      </div>
   </div>
   <div id="imgHeader">
   </div>
   <div id="switch"></div>
   <div id="main">
      <div id="feed">
         <div class="feedClass">
            <content>
               <div id="feedProfPic">
                  <img src="public/images/orang.png"/>
               </div>
               <div id="feedInfo">
                  <h2>Header 1</h2>
                  <span>Oleh noName</span>
                  <span>|</span>
                  <span>waktu</span>
                  <div id="feedPref">
                     <span>comment</span>
                     <span>like</span>
                  </div>
               </div>
               <div id="feedKonten">
                  kontennya
               </div>
            </content>
            <hr>
         </div>
         <div class="feedClass">
            <content>
               <div id="feedProfPic">
                  <img src="public/images/orang.png"/>
               </div>
               <div id="feedInfo">
                  <h2>Header 2</h2>
                  <span>Oleh noName</span>
                  <span>|</span>
                  <span>waktu</span>
                  <div id="feedPref">
                     <span>comment</span>
                     <span>like</span>
                  </div>
               </div>
               <div id="feedKonten">
                  kontennya
               </div>
            </content>
            <hr>
         </div>
         <div class="feedClass">
            <content>
               <div id="feedProfPic">
                  <img src="public/images/orang.png"/>
               </div>
               <div id="feedInfo">
                  <h2>Header 3</h2>
                  <span>Oleh noName</span>
                  <span>|</span>
                  <span>waktu</span>
                  <div id="feedPref">
                     <span>comment</span>
                     <span>like</span>
                  </div>
               </div>
               <div id="feedKonten">
                  kontennya
               </div>
            </content>
            <hr>
         </div>
      </div>
   </div>
   <div id="sideContent">
      <div id="global"></div>
   </div>

@endsection
