<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    //
    public function index(){
        if(session()->has('name'))
        {
            return redirect()->route('dashboard.index');
        }
        else{
            return view('auth.login');
        }
    }

    public function check(Request $request){
        $name = $request->name;
        $password = md5($request->password);
        $result = User::where('name',$name)->where('password',$password)->first();
        if($result){
            $name = $result->name;
            Session::put('name',$name);
            return redirect()->route('dashboard.index');
        }
        else{
            return redirect()->route('login.index');
        }
    }

    public function logout(){
        Session()->flush();
        return redirect()->route('login.index');
    }
}
