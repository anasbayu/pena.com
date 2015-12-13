@extends('templates/master')

@section('title')
   Homepage
@endsection

@section('script')
   {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>  --}}
   <script src="{{asset('public/js/jquery-2.1.4.min.js')}}"></script>
   <script src="{{asset('public/js/scroll.js')}}"></script>
@endsection

@section('style')
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/homeStyle.css')}}"/>
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/formStyle.css')}}"/>
@endsection

@section('body')
   <div id="section1Home" class="section">
      <div id="formDaftar">
         <form method="post" action="login">
            <input type="text" name="username" placeholder="Nama" required="true"/><br>
            <input type="password" name="pass" placeholder="Kata sandi" required="true"/><br>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button>Masuk</button>
         </form>
         <span>Belum memiliki akun? <b><a href="buatUser">daftar sekarang!</a></b></span>
      </div>
   </div>
   <div id="gambarOrangArea" class="section">
      <img src="{{asset('public/images/orang.png')}}" id="orang">
      <img src="{{asset('public/images/meja.png')}}" id="meja">
   </div>
   <div id="gambar2" class="section">
      <div id="section2Kiri" class="content">
         <div id="gambar2KiriGambar">
         </div>
         <img src="{{asset('public/images/orangBerubah.png')}}" id="orangBerubah">
      </div>
      <div id="section2Kanan" class="content">
      </div>
   </div>
   <div id="section3" class="section">
      gambar3
   </div>
   <div id="footer">
      footer
   </div>
@endsection
