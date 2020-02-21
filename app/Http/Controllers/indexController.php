<?php
namespace App\Http\Controllers;

use App\message;

class indexController extends Controller{
    public function index(){
        $message=message::orderBy('settop','desc')->orderBy('id','desc')->paginate(5);
        return view('messageboard.index',[
            'messages'=>$message
        ]);
    }
}
