<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventBookingController extends Controller
{
    public function Eventbooking(){
        return view('frontend.eventbooking');
    }
}
