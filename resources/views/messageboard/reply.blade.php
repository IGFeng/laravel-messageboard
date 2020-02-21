@extends('messageboard.layouts')
@section('title')
回复留言
@endsection
@section('content')
<div id="main">
    <div id="submit">
    <form name="form1" method="post" action="{{url('edit',['id'=>"$content->id"])}}">
        @csrf
    <h2>
    {{$content->username}}<span style="color:#999;">于{{$content->systime}}发表留言：</span>
    </h2>　　
           <textarea name="content" cols="70" rows="9" id="content">{{$content->content}}</textarea><br>
                  <span style="margin-left:80px;">管理员回复的内容：</span><br>
                  <textarea name="reply" cols="50" rows="6" id="reply_textarea">{{$content->reply}}</textarea><br>
                  <input type="submit" style="margin-left:80px;margin-top:10px;" value="回复" />
    </form>

@endsection
