<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}——管理后台</title>
    <link href="{{ asset('layui/css/layui.css') }}" rel="stylesheet">
</head>
<body class="layui-layout-body">
    @yield('content')
    <script src="{{ asset('layui/layui.js') }}"></script>
    <script>
    layui.use(['laydate', 'laypage', 'layer', 'table', 'carousel', 'upload', 'element', 'slider'],function(){
        //  向世界问个好
        // layer.msg('Hello World');
    });
    </script>
</body>
</html>
