<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ScheduleEvent;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function schedule(){
        $schedule = ScheduleEvent::get();
        return view('frontend.eventschedule',compact('schedule'));
    }
}
