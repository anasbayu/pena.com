@extends('templates/master')

@section('title')
   Daftar
@endsection

@section('script')

@endsection

@section('style')
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/formStyle.css')}}"/>
@endsection

@section('body')
   <div class="areaKonten marginTop100px">
      <div id="formDaftar">
         <form method="post" action="buatUser">
            <input type="text" name="username" placeholder="Nama" required="true"/><br>
            <input type="password" name="pass" placeholder="Kata sandi" required="true"/><br>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button>Daftar</button>
         </form>
      </div>
   </div>
@endsection
