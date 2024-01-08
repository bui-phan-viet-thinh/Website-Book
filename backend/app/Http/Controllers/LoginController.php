<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
class LoginController extends Controller
{
    public function formlogin()
    {
        return view('Login');
    }
    public function xuliDangNhap(Request $rq){

        $admin=Users::where('ten', $rq->ten)->where('password',$rq->password)->first();
        /* dd($admin); */
        if(empty($admin)){

            return view('Login');
        }
        session(['admin_login'=>$admin]);
        return redirect()->route('layout.hien-thi');

    }
    public function dangXuat(){
        session()->forget('admin_login');
        return redirect()->route('login.hien-thi-form');
    }



}
