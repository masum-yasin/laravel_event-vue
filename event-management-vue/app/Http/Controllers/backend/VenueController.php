<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\EventVenues;
use App\Models\Sponsor;
use Illuminate\Http\Request;




class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventvenus =EventVenues::get();
        return view('backend.eventvenu.index',compact('eventvenus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sponsers =Sponsor::get();
        $categories =Category::get();
        return view('backend.eventvenu.create',compact('sponsers','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'image'=>'mimes:jpg,jpeg,png',
            'address'=>'required|min:4|max:300',
            'longitude'=>'required|min:3',
            'latitude'=>'required|min:3',
            'description'=>'required|min:4',
           
            
        ]);
        $filename = time(). "." . $request->image->extension();
       if($validate){
        $data = [
            'category_id'=>$request->category,
            'image'=>$filename,
            'latitude'=>$request->latitude,
            'longitude'=>$request->longitude,
            'event_address'=>$request->address,
            'description'=>$request->description,
            'sponsors_id'=>$request->company,
        ];
        $model = new EventVenues();
        if($model->create($data));
        $request->image->move('uploads/', $filename);
        return redirect()->route('eventvenues.index')->with('Event Venu Inserted Successfully');

       }
      
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sponsers =Sponsor::get();
        $categories =Category::get();
        $eventvenus = EventVenues::find($id);
        return view('backend.eventvenu.edit',compact('sponsers','categories','eventvenus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sponsor = EventVenues::find($id);
        $validate = $request->validate([
            'image'=>'mimes:jpg,jpeg,png',
            'address'=>'required|min:4|max:300',
            'longitude'=>'required|min:3',
            'latitude'=>'required|min:3',
            'description'=>'required|min:4',
            
            
        ]);
        $filename = time(). "." . $request->image->extension();
       if($validate){
        $data = [
            'image'=>$filename,
            'latitude'=>$request->latitude,
            'longitude'=>$request->longitude,
            'event_address'=>$request->address,
            'description'=>$request->description,
            'category_id'=>$request->category,
            
           
        ];
       $sponsor->update($data);
     $request->image->move('uploads/', $filename);
        return redirect()->route('eventvenues.index')->with('Event Venu Update Successfully');
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sponsor= EventVenues::find($id);
        if($sponsor->delete());
        return redirect()->route('eventvenues.index')->with('msg','Delete Successfully');
    }
}
