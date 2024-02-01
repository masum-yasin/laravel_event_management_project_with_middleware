<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\EventBooking;
use App\Models\Eventtype;
use Illuminate\Http\Request;


class EventBookingController extends Controller
{


    public function create($id){
   
        $eventtype = Eventtype::find($id);
      
        return view('frontend.eventbooking',compact('eventtype'));
    }
    public function store(Request $request){
        
        
        $validate = $request->validate([
            'name'=>'required|min:4',
            'email'=>'required',
            'phone'=>'required|numeric',
            'event_name'=>'required|min:4',
            'event_catalog'=>'mimes:jpg,jpeg,png',
            'member'=>'required|min:4',
            'description'=>'required|min:4',
            'address'=>'required|min:4',
            'event_category'=>'required|min:4',
        ]);
        $filename = time(). "." . $request->event_catalog->extension();
        if($validate){
            $data = [
                'customer_name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'event_name'=>$request->event_name,
                'event_catalog'=>$filename,
                'member'=>$request->member,
                'description'=>$request->description,
                'address'=>$request->address,
                
            ];
            $model = new EventBooking();
            $request->event_catalog->move('uploads',$filename);
            if($model->create($data));
            // return redirect()->route('.index')->with('msg','Blog Inserted Successfully');

        
    }
}
}
