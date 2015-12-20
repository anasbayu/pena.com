@extends('templates/master')

@section('title')
   Edit User
@endsection

@section('script')

@endsection

@section('style')
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/formStyle.css')}}"/>
@endsection

@section('body')
   <div class="areaKonten marginTop100px">
      <div id="formEdit">
         <form method="post" enctype="multipart/form-data"
            action="{{action('pageController@update')}}" >
            <input type="text" name="username" value="{{$user->username}}" readonly=""/><br>
            <input type="email" name="email" placeholder="Email" value="{{$user->email}}"
               required="true"/><br>
            <input type="password" name="pass" placeholder="Kata sandi" required="true"
            value="{{$user->pass}}"/><br>
            <input type="text" name="nama" value="{{$user->nama}}" placeholder="Nama"/><br>
            <input type="text" name="linkfb" placeholder="link facebook"
               value="{{$user->linkfb}}" /><br>
            <input type="text" name="linktwitter" placeholder="link twitter"
               value="{{$user->linktwitter}}" /><br>
            <input type="text" name="linkinstagram" placeholder="link instagram"
               value="{{$user->linkinstagram}}" /><br>
            <textarea maxlength="150" name="deskripsi" placeholder="Deskripsi" id="deskripsi">{{$user->deskripsi}}</textarea><br>
            <input type="file" name="profPic"/><br>
            <input type="file" name="cover"/><br>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button>Edit</button>
         </form>
      </div>
   </div>
@endsection
