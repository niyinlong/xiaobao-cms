<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('layui/css/layui.css') }}" rel="stylesheet">
</head>
<body class="layui-layout-body">
    <div class="layui-layout layui-layout-admin">
        <div class="layui-header">
            <a class="layui-logo" href="{{ route('index') }}">{{ config('app.name', 'Laravel') }}</a>   
            <ul class="layui-nav layui-layout-right">
                @guest
                    @if (Route::has('login'))
                        <li class="layui-nav-item {{Request::getPathInfo()=='/login'?'layui-this':''}}">
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="layui-nav-item {{Request::getPathInfo()=='/register'?'layui-this':''}}">
                            <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="layui-nav-item">
                        <a href="javascript:;">{{ Auth::user()->name }}</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
    @yield('content')
</body>
</html>
