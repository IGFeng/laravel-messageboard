@extends('messageboard.layouts')
@section('title')
签写留言
@endsection
@section('content')
    @include('validator')
        <div id="main">
        <div id="submit">
        <form name="form1" method="post" action="{{url('create')}}">
            @csrf
        <p><img src=""><img src="" ></p><br>
        <label for="username">昵称:</label><input type="text" id="username" name="message[username]" value=""><br>
        <label for="content">内容:</label><textarea id="content" name="message[content]" cols="70" rows="9"></textarea> <br>
        <label for="comment"></label><span style="color:red">“我喝过很烈的酒，也放过不该放的手，从前不会回头，往后不会将就。”</span><br>
        <label for="ifqqh">悄悄话</label>
        <input name="message[ifqqh]" type="checkbox" id="ifqqh" value="1"><span>当选中时，此留言仅有管理员可见</span><br>
        <!--<label for="unum">验证码</label><input name="unum" type="text" id="message[unum]" size="10"><img src="randnum.php?id=-1" title="点击刷新" style="cursor:pointer" onclick=eval(this.src="randnum.php?id='+i+++'")><br>-->
        <input type="submit" id="sbutton" value="确 定"><br><input name="message[ac]" type="hidden" id="ac" value="add">
        </form>
        </div>
        </div>
        @endsection
</html>
