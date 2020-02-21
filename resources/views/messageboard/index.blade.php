@extends('messageboard.layouts')
@section('title')
浏览留言
@endsection
@section('content')
<!--最外层主要区域开始-->
<div id="main">
  <div id="list">
      <div id="listmain">
        @foreach($messages as $message)
<h2>
<span class="leftarea">
<div style="color:#999;">{{$message->username}}于 {{$message->systime}} 发表留言：</div>
 @if($message->systime==date("Y-m-d H:i",time()))
 <img src="">
 @endif
 @if($message->settop!=0)
 <img src="" alt=已置顶>
 @endif
</span>
<span class="midarea">
@if(Session::has('admin_pass'))
    @if($message->ifshow==0)
        <a href="{{url('verify',['id'=>$message->id,'ac'=>'verify'])}}" onclick="if(confirm('确定审核通过此留言吗?')==false) return false;">审核</a>
    @else
    <a href="{{url('hide',['id'=>$message->id,'ac'=>'hide'])}}" onclick="if(confirm('确定隐藏此留言吗?')==false) return false;">隐藏</a>
    @endif
    <a href="{{url('delete',['id'=>$message->id,'ac'=>'delete'])}}" onclick="if(confirm('确定删除此留言吗?')==false) return false;">删除</a>
    <a href="{{url('reply',['id'=>$message->id,'ac'=>'reply'])}}" >回复</a>
    @if($message->settop==0)
    <a href="{{url('settop',['id'=>$message->id,'ac'=>'settop'])}}" onclick="if(confirm('确定置顶此留言吗?')==false) return false;">置顶</a>
    @else
    <a href="{{url('unsettop',['id'=>$message->id,'ac'=>'unsettop'])}}" onclick="if(confirm('确定取消置顶吗?')==false) return false;">取消置顶</a>
    @endif
@endif
</span>
</h2>
<div class="content">
@if(!Session::has('admin_pass'))
	@if($message->ifqqh==1)
            <span class=ftcolor_999>（此留言为悄悄话，只有管理员才能看哦……）</span>
    @else
        @if($message->ifshow==0)
			<span class=ftcolor_999>（此留言正在通过审核，当前不可见……）</span>
		@else
            {{$message->content}}
        @endif
    @endif
@else
{{$message->content}}
@endif
</div>
@if(!empty($message->reply))
<div class="reply"><p><span class="ftcolor_FF9"><b>管理员</b>于{{$message->replytime}}回复:</span></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
{{$message->reply}}
</div>
@endif
@endforeach
</div><!--listmain结束-->
</div><!--list结束-->
<div class="paginate">
{{$messages->render()}}
</div>
<!--最外层主要区域结束-->
</div>
@endsection
</html>
