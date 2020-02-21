<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\administrator;

class registerController extends Controller{
    public function trans(){
        return view('messageboard.register');
    }
    public function register(Request $request){
        $data=$request->input('register');
        $user=new administrator();
        if($data['admin_key']=="212nb"){
            $user->account=$data['admin_user'];
            $user->password=$data['admin_pass'];
            $user->save();
            return redirect('index');
        }
        else return redirect()->back();
    }
}
