<?php
namespace App\Http\Controllers;
use App\message;
class actionController extends Controller{
    public function action($id,$ac){
        if($ac=='verify'){
            $Message=message::find($id);
            $Message->ifshow=1;
            $Message->save();
            return redirect('index');
        }
        if($ac=='delete'){
            $Message=message::find($id);
            $Message->delete();
            return redirect('index');
        }
        if($ac=='hide'){
            $Message=message::find($id);
            $Message->ifshow=0;
            $Message->save();
            return redirect('index');
        }
        if($ac=='reply'){
            return redirect('reply');
        }
        if($ac=='settop'){
            $Message=message::find($id);
            $Message->settop=1;
            $Message->save();
            return redirect('index');
        }
        if($ac=='unsettop'){
            $Message=message::find($id);
            $Message->settop=0;
            $Message->save();
            return redirect('index');
        }
    }
}
