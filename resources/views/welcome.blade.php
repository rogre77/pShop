@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
                <img src="/img/myPizzaLogo.jpg" alt="The Little House Of Pizza">
            <div class="title m-b-md">
                The Little House Of Pizza
            </div>

            <p class="mssg">{{ session('mssg') }}</p>
            <div class="links">
                <a href=" {{ route('pizzas.create') }} ">Order a Pizza</a>
            </div>
        </div>
    </div>
@endsection
