<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Eventtype;
use Illuminate\Http\Request;


class DetailsController extends Controller
{
   public function index($id){
    $data = Eventtype::find($id);
    return view('frontend.eventtypedetail',compact('data'));
   }
}
