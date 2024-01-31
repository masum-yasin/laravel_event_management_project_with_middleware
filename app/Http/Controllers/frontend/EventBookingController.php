<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Eventtype;
use Illuminate\Http\Request;


class EventBookingController extends Controller
{
    public function Eventbooking($id){
   
        $eventtype = Eventtype::find($id);
      
        return view('frontend.eventbooking',compact('eventtype'));
    }
}
