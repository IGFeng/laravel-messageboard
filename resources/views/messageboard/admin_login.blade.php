@extends('messageboard.layouts')
@section('title')
管理员登陆
@endsection
@section('content')
<div id="main">
<div id="submit">
<form name="form1" method="post" action="{{url('admin')}}">
    @csrf
<div id="submit_div">
<label for="admin_user"> 管理员账号</label><input name="admin[admin_user]" type="text" id="admin_user"><br>
<label for="admin_pass">管理员密码</label><input name="admin[admin_pass]" type="password" id="admin_pass"><br>
<input type="submit" id="sbutton"value="确 定"><br>
</div>
</form>
</div>
</div>
@endsection
