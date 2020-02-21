<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;

class addController extends Controller{
    public function add(){
        return view('messageboard.add');
    }
    public function create(Request $request){
       $this->validate($request,[
            'message.username'=>'required|min:2|max:10',
            'message.content'=>'required|max:100',
        ],[
            'required'=>':attribute为必填项',
            'min'=>':attribute不少于2个字符',
            'max'=>':attribute长度不超过:max个字符',
        ],[
            'message.username'=>'昵称',
            'message.content'=>'内容',
        ]);
        $data=$request->input('message');
        $Message=new message();
        $Message->username=$data['username'];
        $Message->content=$data['content'];
        if(empty($data['ifqqh']))
        $data['ifqqh']=0;
        $Message->ifqqh=$data['ifqqh'];
        $Message->systime=date("Y-m-d H:i",time());
        $Message->save();
        if($Message->save())
            return redirect('index');
            else return redirect()->back();
    }
    
}
