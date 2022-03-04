<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <title>Electoral Platform - @yield('title')</title>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white 
    border-bottom shadow-sm mb-3">
        <h5 class="my-0 mr-md-auto font-weight-normal">Electoral Platform</h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="{{ route('home.index') }}">Home</a>
                <a class="p-2 text-dark" href="{{ route('home.contact') }}">Contact</a>

                @guest
                    @if (Route::has('register'))
                    <a class="p-2 text-dark" href="{{ route('register') }}">Register</a>
                    @endif
                    <a class="p-2 text-dark" href="{{ route('login') }}">Login</a>
                @elseif (((Auth::user()->email) == 'corperadmin1@yahoo.com') || ((Auth::user()->email) == 'corperadmin2@gmail.com'))
                    {{--<a class="p-2 text-dark" href="{{ route('events.index') }}">Event List</a>--}}
                    <a class="p-2 text-dark" href="{{ route('citizens.create') }}">Register a Citizen</a>
                    <a class="p-2 text-dark" href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                        >Log out | {{ Auth::user()->name }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                        style="display: none">
                        @csrf
                    </form>
                @else
                    <a class="p-2 text-dark" href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                        >Log out | {{ Auth::user()->name }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                        style="display: none">
                        @csrf
                    </form>
                @endguest
            </nav>
    </div>
    <div class="container">
        @if (session('status'))

            <div class="alert alert-success">

                {{ session('status') }}

            </div>
        @elseif (session('statusNeg'))
        <div class="alert alert-danger">

            {{ session('statusNeg') }}

        </div>
        @endif
        @yield('content')
    </div>
</body>
</html>