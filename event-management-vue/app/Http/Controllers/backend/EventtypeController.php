<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Eventtype;
use Illuminate\Http\Request;


class EventtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventtypes=Eventtype::get();
        return view('backend.eventtype.index',compact('eventtypes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('backend.eventtype.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $validate = $request->validate([
            // 'category'=>'required|min:4',
            'image'=>'mimes:jpg,jpeg,png',
            'price'=>'required:numeric',
            'description'=>'required|min:5',
            'event_name'=>'required|min:4'
            
        ]);
        $filename = time(). "." . $request->image->extension();
        if($validate){
            $data = [
                'category_id' => $request->category,
                'image'=> $filename,
                'price'=> $request->price,
                'description'=> $request->description,
                'availibility' => $request->availibility,
                'event_name'=>$request->event_name,
                'categories_id'=>$request->category
            ];
            $model = new Eventtype();
            if($model->create($data));
            $request->image->move('uploads', $filename);
            return redirect()->route('eventtype.index')->with('msg','Inserted Successfully');
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::get();
        $eventtype = Eventtype::find($id);
        return view('backend.eventtype.edit',compact('eventtype','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $eventtype = Eventtype::find($id);
        $validate = $request->validate([
            'eventtype'=>'required|min:4',
            'image'=>'mimes:jpg,jpeg,png',
            'price'=>'required:numeric',
            'description'=>'required|min:5',
            'event_name'=>'required|min:4'
            
        ]);
        $filename = time(). "." . $request->image->extension();
        if($validate){
            $data = [
                'eventype' => $request->eventtype,
                'image'=> $filename,
                'price'=> $request->price,
                'description'=> $request->description,
                'availibility' => $request->availibility,
                'event_name'=>$request->event_name,
                'categories_id'=>$request->category
            ];
           
            $eventtype->update($data);
            $request->image->move('uploads', $filename);
            return redirect()->route('eventtype.index')->with('msg','Update Successfully');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eventtype = Eventtype::find($id);
        if($eventtype->delete());
        return redirect()->route('eventtype.index')->with('msg','delete Successfully');
    }
}
