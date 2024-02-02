<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('volunteer.login');
    }

  
    
    public function store(Request $request)
    {
        $volunteer = $request->all();
        $type = 'volunteer';
        if(Auth::guard('volunteer')->attempt(['email'=>$volunteer['email'],'password'=> $volunteer['password']])){
            return redirect()->route('volunteer.voldashboard',$type);
        }
        else{
            return view('volunteer.login');
        }
    }

   
    public function voldashboard($type)
    {
        $user = Auth::guard($type)->user();
        return view('volunteer.voldashboard',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Volunteer $volunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Volunteer $volunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Volunteer $volunteer)
    {
        //
    }
}
