@extends('templates/master')

@section('title')
   Cerita
@endsection

@section('script')
   {{-- <script src="{{ URL::asset('public/js/jquery-2.1.4.min.js') }}"></script>
   <script src="{{ URL::asset('public/js/tulis.js') }}"></script> --}}
   <script src="{{ URL::asset('public/js/jquery-2.1.4.min.js') }}"></script>
   <script src="{{ URL::asset('public/js/header.js') }}"></script>
@endsection

@section('style')
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/headerStyle.css')}}"/>
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/formStyle.css')}}"/>
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/ceritaStyle.css')}}"/>
@endsection

@section('body')
   @include('templates/header')
   <div class="areaKonten marginTop100px kontenCerita">
      @if(!isset($cerita))
         <center><h1>Maaf, cerita yang anda maksud tidak ada :(</h1></center>
      @else
         <center><h1>{{$cerita->judul}}</h1></center>
         <span id="pengarang">
            oleh
            <a href="{{action('userController@show', $cerita->user_id)}}">
               {{App\User::findOrFail($cerita->user_id)->username}}
            </a>
         | {{$cerita->created_at}}</span>
          <span id="view"><b>{{$cerita->views}}</b> views</span>
         <hr><br>
         <span id="isi">{!! nl2br(e($cerita->isi)) !!}</span>
      @endif
   </div>
@endsection
