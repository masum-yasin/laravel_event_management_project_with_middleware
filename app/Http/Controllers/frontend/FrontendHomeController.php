<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Eventtype;
use Illuminate\Http\Request;


class FrontendHomeController extends Controller
{
    public function index(){
        $eventtype = Eventtype::get();
        return view('frontend.home',compact('eventtype'));
    }
}
