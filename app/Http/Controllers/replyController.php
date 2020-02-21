<?php
namespace App\Http\Controllers;
use App\message;
use Illuminate\Http\Request;
class replyController extends Controller{
    public function reply($id,$ac){
        $content=message::find($id);
        return view('messageboard.reply',[
            'content'=>$content
        ]);
    }
    public function edit(Request $request,$id){
        $data=$request->input('reply');
        $Message=message::find($id);
        $Message->reply=$data;
        $Message->replytime=date("Y-m-d H:i",time());
        $Message->save();
        return redirect('index');
    }
}
