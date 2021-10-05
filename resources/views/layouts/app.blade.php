<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--  Fonts  --}}
    <link rel="stylesheet" href="{{ asset('fonts/titillium/titillium.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/roboto/roboto.css') }}">
    {{--  Styles  --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{--  Favicon  --}}
    <link rel="icon" href="{{ asset('img/logo.png') }}">

    {{--  Title  --}}
    <title>@yield(('title'))</title>
</head>
<body>
@include('plugins/register-modal')
@include('plugins/login-modal')
@include('plugins/order-modal')
<nav class="container_fluid navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('img/logo.png') }}" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item nav_item">
                <a class="nav-link nav_link" href="{{ url('/') }}">{{ __('Home') }}</a>
            </li>
            <li class="nav-item nav_item">
                <a class="nav-link nav_link" href="{{ route('assets-browse') }}">{{ __('Assets Browse') }}</a>
            </li>
            <li class="nav-item nav_item">
                <a class="nav-link nav_link" href="{{ route('portfolio') }}">{{ __('Portfolio') }}</a>
            </li>
            <li class="nav-item nav_item">
                <a class="nav-link nav_link" href="{{ url('about') }}">{{ __('About') }}</a>
            </li>
        </ul>
        @guest
            <ul class="navbar-nav align-items-center">
                <li class="nav-item log_item">
                    <button type="button" class="btn nav-link nav_link" data-toggle="modal" data-target="#loginModal">{{ __('Log In') }}</button>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn_border_gradient nav-link nav_link" data-toggle="modal" data-target="#registerModal">{{ __('Register') }}</button>
                </li>
            </ul>
        @else
            <ul class="navbar-nav align-items-center">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        @endguest
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="footer">
    <div class="container_fluid container-fluid">
        <div class="footer_container">
            <img src="{{ asset('img/logo.png') }}" class="img-fluid">
            <div class="footer_follow_us">
                <p class="follow_us">
                    Follow us
                </p>
                <a href="https://www.facebook.com/" target="_blank">
                    <img src="{{ asset('img/icons/facebook.png') }}" class="img-fluid" alt="Facebook">
                </a>
                <a href="https://twitter.com/" target="_blank">
                    <img src="{{ asset('img/icons/twitter.png') }}" class="img-fluid" alt="Twitter">
                </a>
                <a href="https://www.linkedin.com/" target="_blank">
                    <img src="{{ asset('img/icons/linkedin.png') }}" class="img-fluid" alt="Linkedin">
                </a>
                <a href="https://www.instagram.com/" target="_blank">
                    <img src="{{ asset('img/icons/instagram.png') }}" class="img-fluid" alt="Instagram">
                </a>
            </div>
        </div>
        <div class="footer_copy_right">
            C <?= date('Y') ?> All Rights Reserved. Terms of Use and Privacy Policy
        </div>
    </div>
</footer>
{{--  Start Scripts  --}}

{{--<script src="{{ asset('js/jquery.min.js') }}"></script>--}}
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
{{--  End Scripts  --}}
</body>
</html>
