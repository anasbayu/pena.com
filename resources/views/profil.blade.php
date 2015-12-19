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
         <div id="profilSetting">
            <a href="{{ route('user.edit', $user->id) }}">
               <img src="public/images/logo/facebook.png"/>
            </a>
         </div>
         <div class="centered" id="bgProfPic">
         </div>
         <div id="profPic" class="centered">
            <img src="public/images/profPic/scarlet.png"/>
         </div>
         <center>
            @if (isset($user))
               <h2>{{$user->username}}</h2>
               <span>{{$user->deskripsi}}</span>
            @else
               <h2>NoName</h2>
               <span>deskripsi</span>
            @endif
         </center>
         <div id="socialMediaContainer">
            <div class="centered" id="socialMedia">
               @if (isset($user))
                  @if ($user->linkfb != "")
                     <a href="{{$user->linkfb}}">
                        <img src="public/images/logo/facebook.png"/>
                     </a>
                  @endif
                  @if ($user->linktwitter != "")
                     <a href="{{$user->linktwitter}}">
                        <img src="public/images/logo/twitter.png"/>
                    </a>
                  @endif
                  @if ($user->linkinstagram != "")
                  <a href="{{$user->linkinstagram}}">
                     <img src="public/images/logo/facebook.png"/>
                  </a>
                  @endif
               @endif
            </div>
         </div>
         <div id="misc" class="centered">
            <div id="follower">
               <center>
                  <span>{{$user->follower->count()}}</span><br>
                  Follower
               <center>
            </div>
            <div id="post">
               <center>
                  <span>{{$user->cerita->count()}}</span><br>
                  Post
               <center>
            </div>
         </div>
      </div>
   </div>

   <div class="areaKonten marginTop100px" id="feedHistory">

      @if (isset($user))
         @foreach ($user->cerita as $cerita)
            <div class="feedClass">
               <content>
                     <div id="feedProfPic">
                        <img src="public/images/profPic/emmaProfPic.jpg"/>
                     </div>
                  <div id="feedInfo">
                     <a href="cerita/{{$cerita->idCerita}}"/><h2>{{$cerita->judul}}</h2></a>
                     <span>Oleh {{$user->username}}</span>
                     <span>|</span>
                     <span>{{$cerita->created_at}}</span>
                     <div id="feedPref">
                        <span>comment</span>
                        {{-- <a href="{{action('pageController@like', $cerita->user_id)}}"> --}}
                           <span>like</span>
                        {{-- </a> --}}
                     </div>
                  </div>
                  <div id="feedKonten">
                     {{$cerita->isi}}
                  </div>
               </content>
               <hr>
            </div>
         @endforeach
      @endif

   </div>
@endsection
