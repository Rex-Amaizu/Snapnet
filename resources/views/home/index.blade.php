@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
@guest
    <h1>WELCOME TO THE Vtest Electoral ONLINE PLATFORM</h1>
    <p>You can login or register if you are a new user.</p>
@else
    <h1>WELCOME TO THE Vtest Electoral ONLINE USER PLATFORM</h1>
    <p>You can check your citizen status and cast your votes.</p>
@endguest

@endsection