<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\EventSpeaker;
use Illuminate\Http\Request;
use Inertia\Inertia;

use function PHPUnit\Framework\returnSelf;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $speakers = EventSpeaker::get();
        return view('backend.speaker.index',compact('speakers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        $categories = Category::get();
        return view('backend.speaker.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'image'=>'mimes:jpg,jpeg,png',
            'speaker'=>'required|min:4|max:20',
            'phone'=>'required|numeric',
            'email'=>'required|email',
            'facebook'=>'required|min:4|max:20',
            'title'=>'required|min:4'
        ]);
        $filename = time(). "." . $request->image->extension();
        if($validate){
            $data = [
                'image'=>$filename,
                'category_id'=>$request->category,
                'speaker_name'=>$request->speaker,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'facebook'=>$request->facebook,
                'twitter'=>$request->twitter,
                'title'=>$request->title,
            ];
           $model = new EventSpeaker();
           if($model->create($data));
           $request->image->move('uploads/',$filename);
           return redirect()->route('eventspeaker.index')->with('msg','Speaker Inserted Successfully');
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
        $categories =Category::get();
        $speakers =EventSpeaker::find($id);
        return view('backend.speaker.edit',compact('speakers','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $speakers =EventSpeaker::find($id);
        $validate = $request->validate([
            'image'=>'mimes:jpg,jpeg,png',
            'speaker'=>'required|min:4|max:20',
            'phone'=>'required|numeric',
            'email'=>'required|email',
            'facebook'=>'required|min:4|max:20',
            'title'=>'required|min:4'
        ]);
        $filename = time(). "." . $request->image->extension();
        if($validate){
            $data = [
                'image'=>$filename,
                'category_id'=>$request->category,
                'speaker_name'=>$request->speaker,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'facebook'=>$request->facebook,
                'twitter'=>$request->twitter,
                'title'=>$request->title,
            ];
          $speakers->update($data);
           $request->image->move('uploads/',$filename);
           return redirect()->route('eventspeaker.index')->with('msg','Speaker Update Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $speakers = EventSpeaker::find($id);
       if($speakers->delete());
       return redirect()->route('eventspeaker.index')->with('msg','Speaker Delete Successfully');
    }
}
