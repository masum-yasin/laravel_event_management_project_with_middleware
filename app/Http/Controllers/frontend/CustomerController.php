<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class CustomerController extends Controller
{
   public function index(){

   }
   public function create(){
    return view('frontend.customer.login');
   }
   public function login(Request $request){
      $customer = $request->all();
     
      if(Auth::guard('customer')->attempt(['email'=>$customer['email'], 'password'=>$customer['password']])){
          return redirect('/');
      }
      else{
          return view('frontend.customer.login');
      }
   }

   public function dashboard(){
      return view('frontend.customer.dashboard');
  }

  public function mybooking()
  {
      $customer_id = Auth::guard('customer')->user()->id;
      // $product = Order::where('student_id', $student_id)->get();
      $booking = Booking::where('customer_id', $customer_id)
      ->where('status', 0)
      ->get();
      return view('frontend.customer.mybooking', compact('booking'));
  }


   public function destroy (Request $request)
    {
        
        Auth::guard('customer')->logout();
        

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return redirect('/');
    }
}
