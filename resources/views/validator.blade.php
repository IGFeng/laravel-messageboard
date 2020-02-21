@if(count($errors))
<div id='information'>
    <ul>
         @foreach($errors->all() as $error)
             <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
