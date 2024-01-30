<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function store(Request $request){
        $admin = $request->all();
        $type = 'admin';
        if(Auth::guard('admin')->attempt(['email'=>$admin['email'], 'password'=>$admin['password']])){
            return redirect()->route('admin.dashboard',$type);
        }
        else{
            return view('admin.login');
        }
    }
    public function adashboard($type){
        $user = Auth::guard($type)->user();
        return view('admin.dashboard',compact('user'));
    }
}
