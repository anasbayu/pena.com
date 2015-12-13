@extends('templates/master')

@section('title')
   Profil
@endsection

@section('script')

@endsection

@section('style')
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/headerStyle.css')}}"/>
@endsection

@section('body')
   @include('templates/header')
   <div class="areaKonten marginTop100px">
   </div>
@endsection
