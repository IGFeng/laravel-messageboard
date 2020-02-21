@extends('messageboard.layouts')
@section('title')
管理员注册
@endsection
@section('content')
<div id="main">
    <div id="submit">
    <form name="form1" method="post" action="{{url('register')}}">
        @csrf
    <div id="submit_div">
    <label for="admin_user"> 注册账号</label><input name="register[admin_user]" type="text" id="admin_user"><br>
    <label for="admin_pass">注册密码</label><input name="register[admin_pass]" type="password" id="admin_pass"><br>
    <label for="admin_key">管理员密钥</label><input name="register[admin_key]" type="password" id="admin_key"><br>
    <input type="submit" id="sbutton"value="确 定"><br>
    </div>
    </form>
    </div>
    </div>
@endsection
