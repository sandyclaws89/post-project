@extends('layouts.base')
@section('pageTitle', 'Posts List')
@section('pageMain')
   @guest
   <p>lista</p>
   @endguest
   @auth
   <form action=""> form per i comandi dell'admin</form>
   @endauth

@endsection
