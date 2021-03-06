@extends('templates/master')

@section('title')
   Profil
@endsection

@section('script')
   <script src="{{ URL::asset('public/js/jquery-2.1.4.min.js') }}"></script>
   <script src="{{ URL::asset('public/js/header.js') }}"></script>
@endsection

@section('style')
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/headerStyle.css')}}"/>
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/profilStyle.css')}}"/>
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/feedStyle.css')}}"/>
@endsection

@section('body')
   @include('templates/header')
   <div id="infoArea">
      {{-- <img id="background" src="public/images/profPic/emmaCover.jpg"/> --}}
      <img id="background" src="{{asset($user->cover)}}"/>
      <div class="centered" id="infoContent">
         <div id="profilSetting">
            @if ($user != Auth::user())
               <span><a href="{{redirect('follow')}}">Follow</a></span>
            @endif
            @if ($user == Auth::user())
               <a href="{{ route('user.edit', $user->id) }}">
                  <img src="{{asset('public/images/logo/facebook.png')}}"/>
               </a>
            @endif
         </div>
         <div class="centered" id="bgProfPic">
         </div>
         <div id="profPic" class="centered">
            <img src="{{asset($user->profpic)}}"/>
            {{-- <img src="public/images/profPic/scarlet.png"/> --}}
         </div>
         <center>
            @if (isset($user))
               <h2>{{$user->nama}}</h2>
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
                        <img src="{{asset('public/images/logo/facebook.png')}}"/>
                     </a>
                  @endif
                  @if ($user->linktwitter != "")
                     <a href="{{$user->linktwitter}}">
                        <img src="{{asset('public/images/logo/twitter.png')}}"/>
                    </a>
                  @endif
                  @if ($user->linkinstagram != "")
                  <a href="{{$user->linkinstagram}}">
                     <img src="{{asset('public/images/logo/facebook.png')}}"/>
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
                        <div id="feedProfPicContainer">
                           <img src="{{asset($user->profpic)}}"/>
                        </div>
                     </div>
                  <div id="feedInfo">
                     <a href="{{url('cerita'). '/' . $cerita->idCerita}}"/><h2>{{$cerita->judul}}</h2></a>
                     <span>Oleh {{$user->username}}</span>
                     <span>|</span>
                     <span>{{$cerita->created_at}}</span><br>
                     <span>{{$cerita->views}} views</span>
                     <div id="feedPref">
                        <span>comment</span>
                        {{-- <a href="{{action('pageController@like', $cerita->user_id)}}"> --}}
                           <span>like</span>
                        {{-- </a> --}}
                     </div>
                  </div>
                  <div id="feedKonten">
                     <span id="isi">{!! nl2br(e($cerita->isi)) !!}</span>
                  </div>
               </content>
               <hr>
            </div>
         @endforeach
         @if ($user->cerita->count() == 0)
            <center>
               <span id="notif">Pengguna ini belum menuliskan ceritanya :(</span>
            </center>
         @endif
      @endif

   </div>
@endsection
