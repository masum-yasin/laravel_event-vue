<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Eventtype;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EventBookingController extends Controller
{
    
    public function index(){
        $bookings = Booking::get();
        return view('frontend.booking.index',compact('bookings'));
    }


    public function create($id){
   
        $eventtype = Eventtype::find($id);
      
        return Inertia::render('EventDetails',compact('eventtype'));
    }
    public function store(Request $request){

            $validate = $request->validate([
            'customer_name'=>'required|min:4',
            'email'=>'required|email',
            'phone_number'=>'required|numeric',
            'event_catalog'=>'mimes:jpg,jpeg,png',
            'member'=>'required|min:2',
            'description'=>'required|min:4',
            'address'=>'required|min:4',
            'event_category'=>'required|min:4',
        ]);
        // $filename = time(). "." . $request->event_catalog->extension();
        if($validate){
            $data = [
                'customer_name'=>$request->customer_name,
                'email'=>$request->email,
                'phone_number'=>$request->phone_number,
                // 'event_catalog'=>$filename,
                'member'=>$request->member,
                'description'=>$request->description,
                'address'=>$request->address,
                'event_category'=>$request->event_category,
                'customer_id' => $request->customer_id ,
                'booking_price' => $request->booking_price ,
                'payment_method' => $request->payment_method,
                't_id' => $request->t_id,
                
            ];
            // dd($data) ;
            $model = new Booking();
            if($model->insert($data)){
                // $request->event_catalog->move('uploads',$filename);
                return back()->with('msg','Blog Inserted Successfully');
            }
        }
    }
    public function status(Request $request,$id){
        $booking = Booking::find($id);
        $data = [
            'status'=>$request->status
        ];
        $booking->update($data);
        // return 'khibe baba'; }
        return back()->with('msg','status updated');
    }
public function delete($id){
    $booking = Booking::find($id);
    if($booking->delete());
    return back()->with('msg','Booking Delete Successfully');
}


}
