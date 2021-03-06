@extends('templates/master')

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
   @include('templates/header')
   {{-- <div id="imgHeader"></div> --}}
   {{-- <div id="switch"></div> --}}
   <div id="main">

      <div id="feed" class="areaKonten">

         @if (isset($feeds))
            @foreach ($feeds as $feed)
               <div class="feedClass">
                  <content>
                        <div id="feedProfPic">
                           <div id="feedProfPicContainer">
                              <img src="{{App\User::find($feed->user_id)->profpic}}"/>
                           </div>
                        </div>
                     <div id="feedInfo">
                        <a href="cerita/{{$feed->idCerita}}"><h2>{{$feed->judul}}</h2></a>
                        <span>
                           Oleh <a href="{{action('userController@show', $feed->user_id)}}">
                              {{App\User::find($feed->user_id)->username}}
                           </a>
                        </span>
                        <span>|</span>
                        <span>{{$feed->created_at}}</span><br>
                        <span>{{$feed->views}} views</span>
                        <div id="feedPref">
                           {{-- <span>comment</span>
                           <span>like</span> --}}
                           <img class="icon" src="{{asset('public/images/logo/comment.png')}}" />
                           <img class="icon" src="{{asset('public/images/logo/love.png')}}" />
                        </div>
                     </div>
                     <div id="feedKonten">
                        {{-- {{$feed->isi}} --}}
                        <span id="isi">{!! nl2br(e($feed->isi)) !!}</span>
                     </div>
                  </content>
                  <hr>
               </div>
            @endforeach
         @endif

         {{-- @include('templates/feedsTemplate.blade.php') --}}
      </div>
   </div>
@endsection
