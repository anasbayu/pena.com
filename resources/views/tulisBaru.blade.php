@extends('templates/master')

@section('title')
   Tulis baru
@endsection

@section('script')
   <script src="{{ URL::asset('public/js/jquery-2.1.4.min.js') }}"></script>
   <script src="{{ URL::asset('public/js/tulis.js') }}"></script>
@endsection

@section('style')
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/headerStyle.css')}}"/>
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/formStyle.css')}}"/>
@endsection

@section('body')
   @include('templates/header')

   <div class="areaKonten marginTop100px">
      <form action="tulis" method="post">
         <input type="text" name="judul" placeholder="judul" /><br>
         <textarea id="textarea" name="isi" placeholder="Tulis ceritamu disini"></textarea><br>
         <input type="hidden" name="user_id" value="{{$user->id}}" /><br>
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="jumlahHuruf">
            Jumhlah kata: <span id="jumlahHuruf">jumlah</span>
         </div>
         <button type="submit">Kirimkan</button>
      </form>
   </div>
@endsection
