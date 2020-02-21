<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','留言板')</title>
    <link rel="stylesheet" href="{{asset('css.css')}}">
</head>
<body>
    @section('header')
    <div id="top">
        <!--logo-->
        <div id="logoarea"><a href="{{url('/')}}">留言板</a></div>
        <!--菜单-->
        <div id="menu">
        <ul>
        <li><a href="{{url('index')}}"><br>浏览留言</a></li>
        <li><a href="{{url('add')}}"><br>签写留言</a></li>
         @if(!Session::has('admin_pass'))
        <li><a href="{{url('login')}}"><br>管理留言</a></li>
        @else <li><a href="{{action('loginController@logout')}}"onclick="if(confirm('您确定要退出吗?')==false) return false;"><br>退出管理</a></li>
         @endif
        <li><a href="{{url('trans')}}"><br>注册</a></li>
        </ul>
        </div>
        </div>
        @show
        @section('content')
        @show
        @section('footer')
        <div id="foot">
            @2020 sherman
            </div>
        @show
</body>
</html>
