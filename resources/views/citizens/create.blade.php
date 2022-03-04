@extends('layouts.app')

@section('title', 'Register a Citizen')

@section('content')
<form action="{{ route('citizens.store') }}" method="POST">
    @csrf
    @include('citizens.partials.form')

    <div><input type="submit" value="Create" class="btn btn-primary btn-block"></div>

</form>
    
@endsection