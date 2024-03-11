<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
   public function register(){
 return view('frontend.customer.register');
   }
   public function registerStore(Request $request){
    $data = [
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
    ];
   $model = new Customer();
   if($model->insert($data));
   return redirect()->route('customer.register');
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


   public function logout (Request $request)
    {
        
        Auth::guard('customer')->logout();
        

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return redirect('/');
    }
}
