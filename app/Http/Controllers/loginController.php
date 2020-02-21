<?php
 namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\administrator;
use Illuminate\Support\Facades\Session;

class loginController extends Controller{
     public function login(){
         return view('messageboard.admin_login');
     }
     public function admin(Request $request){
         $data=$request->input('admin');
         $count=administrator::where('account',"$data[admin_user]")->count();
         if($count){
         $admin=administrator::where('account',"$data[admin_user]")->first();
         if($admin->password==$data['admin_pass']){
             Session::put('admin_pass','1');
             return view('messageboard.index');
         }
         else{
             return redirect()->back();
         }
         }
         else return redirect()->back();
     }
     public function logout(){
         Session::flush('admin_pass');
         return redirect('index');
     }
 }
