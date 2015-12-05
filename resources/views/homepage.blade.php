@extends('master')

@section('title')
   Homepage
@endsection

@section('style')
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/homeStyle.css')}}"/>
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/formstyle.css')}}"/>
@endsection

@section('body')
   <div id="gambar1" class="gambar">
      <div id="gambar1Daftar">
         <form method="post" action="">
            <input type="text" placeholder="Nama" required="true"/><br>
            <input type="password" placeholder="Kata sandi" required="true"/><br>
            <button>Masuk</button>
         </form>
      </div>
   </div>
   <div id="gambar2" class="gambar">
      <div id="gambar2Kiri" class="content">
         <div id="gambar2KiriGambar">
         </div>
      </div>
      <div id="gambar2Kanan" class="content">
      </div>
   </div>
   <div id="gambar3" class="gambar">
      gambar3
   </div>
   <div id="footer">
      footer
   </div>
@endsection
