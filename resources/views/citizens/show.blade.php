@extends('layouts.app')

@section('title', $citizen->title)

@section('content')

<h1>{{ $citizen->name }}</h1>
<p>{{ $citizen->gender }}</p>
<p>{{ $citizen->address }}</p>
<p>{{ $citizen->wards_id }}</p>
<p>Added {{ $citizen->created_at->diffForHumans() }}</p>

@if (now()->diffInMinutes($citizen->created_at) < 5)
    <div class="alert alert-info">NEW!</div>
@endif
@endsection
