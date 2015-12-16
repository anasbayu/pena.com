@extends('templates/master')

@section('title')
   Profil
@endsection

@section('script')

@endsection

@section('style')
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/headerStyle.css')}}"/>
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/profilStyle.css')}}"/>
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/feedStyle.css')}}"/>
@endsection

@section('body')
   @include('templates/header')
   <div id="infoArea">
      <img id="background" src="public/images/profPic/emmaCover.jpg"/>
      <div class="centered" id="infoContent">
         <div class="centered" id="bgProfPic">
         </div>
         <div id="profPic" class="centered">
            <img src="public/images/profPic/emmaProfpic.jpg"/>
         </div>
         <center>
            @if (isset($user))
               <h2>{{$user->username}}</h2>
            @else
               <h2>NoName</h2>
            @endif
            <span>{{$user->deskripsi}}</span>
         </center>
         <div id="socialMediaContainer">
            <div class="centered" id="socialMedia">
               @if (isset($user))
                  @if ($user->linkfb != "")
                     {{-- <a href="{{$user->linkfb}}"> --}}
                        <img class="iconSosmed" src="public/images/logo/facebook.png"/>
                     {{-- </a> --}}
                  @endif
                  @if ($user->linktwitter != "")
                     {{-- <a href="{{$user->linktwitter}}"> --}}
                        <img class="iconSosmed" src="public/images/logo/twitter.png"/>
                    {{-- </a> --}}
                  @endif
                  {{-- @if ($user->linkinstagram != "")
                  <a href="{{$user->linkinstagram}}">
                     <img class="iconSosmed" src="public/images/orang.png"/>
                  </a>
                  @endif --}}
               @endif
            </div>
         </div>
         <div id="misc" class="centered">
            <div id="follower">
               <center>
                  <span>21 K</span><br>
                  Follower
               <center>
            </div>
            <div id="post">
               <center>
                  <span>1000</span><br>
                  Post
               <center>
            </div>
         </div>
      </div>
   </div>

   <div class="areaKonten marginTop100px" id="feedHistory">

      @if (isset($feeds))
         @foreach ($feeds as $feed)
            <div class="feedClass">
               <content>
                     <div id="feedProfPic">
                        <img src="public/images/profPic/emmaProfPic.jpg"/>
                     </div>
                  <div id="feedInfo">
                     <h2>{{$feed->judul}}</h2>
                     <span>Oleh {{$feed->idPenulis}}</span>
                     <span>|</span>
                     <span>{{$feed->created_at}}</span>
                     <div id="feedPref">
                        <span>comment</span>
                        <span>like</span>
                     </div>
                  </div>
                  <div id="feedKonten">
                     {{$feed->isi}}
                  </div>
               </content>
               <hr>
            </div>
         @endforeach
      @endif

   </div>
@endsection
