@extends('templates/master')

@section('title')
   Edit User
@endsection

@section('script')

@endsection

@section('style')
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/formStyle.css')}}"/>
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/headerStyle.css')}}"/>
@endsection

@section('body')
   @include('templates/header')
   <div class="areaKonten marginTop100px">
      <div id="formEdit">
         <form method="post" enctype="multipart/form-data"
            action="{{action('pageController@update')}}" >
            {{-- <label for="username">Username</label> --}}
            <input type="text" name="username" value="{{$user->username}}" readonly=""/><br>
            {{-- <label for="email">Email</label> --}}
            <input type="email" name="email" placeholder="Email" value="{{$user->email}}"
               required="true"/><br>
            {{-- <input type="password" name="pass" placeholder="Kata sandi" required="true"
            value="{{$user->password}}"/><br> --}}
            {{-- <label for="nama">Nama</label> --}}
            <input type="text" name="nama" value="{{$user->nama}}" placeholder="Nama"/><br>
            {{-- <label for="linkfb">Link Facebook</label> --}}
            <input type="text" name="linkfb" placeholder="link facebook"
               value="{{$user->linkfb}}" /><br>
            {{-- <label for="linktwitter">Link Twitter</label> --}}
            <input type="text" name="linktwitter" placeholder="link twitter"
               value="{{$user->linktwitter}}" /><br>
            {{-- <label for="linkinstagram">Link Instagram</label> --}}
            <input type="text" name="linkinstagram" placeholder="link instagram"
               value="{{$user->linkinstagram}}" /><br>
            {{-- <label for="deskripsi">Deskripsi</label> --}}
            <textarea maxlength="150" name="deskripsi" placeholder="Deskripsi" id="deskripsi">{{$user->deskripsi}}</textarea><br>
            {{-- <label for="profPic">Foto Profil</label> --}}
            <input type="file" name="profPic"/><br>
            {{-- <label for="cover">Foto Cover</label> --}}
            <input type="file" name="cover"/><br>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button>Edit</button>
         </form>
      </div>
   </div>
@endsection
