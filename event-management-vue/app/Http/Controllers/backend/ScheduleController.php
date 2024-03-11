<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\EventSpeaker;
use App\Models\ScheduleEvent;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = ScheduleEvent::get();
        return view('backend.schedule.index',compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $speakers =EventSpeaker::get();
        $categorys = Category::get();
        return view('backend.schedule.create',compact('categorys','speakers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'day'=>'required',
            'starttime'=>'required',
            'endtime'=>'required',
            'desc'=>'required|min:5',
            'category'=>'required',
         
        ]);
        if($validate){
           $data= [
            'day_number'=> $request->day,
            'start_time'=> $request->starttime,
            'ending_time'=> $request->endtime,
            'category_id'=> $request->category,
            'title'=> $request->desc,
            'event_speaker_id'=> $request->speaker,
           ];
           $mode = new ScheduleEvent();
           if($mode->create($data));
           return redirect()->route('schedule.index')->with('msg','Schedule Inserted Successfully');
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
        $categorys = Category::get();
        $schedules =ScheduleEvent::find($id);
        return view('backend.schedule.edit', compact('categorys','schedules'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $schedule = ScheduleEvent::find($id);
        $validate = $request->validate([
           
            'desc'=>'required|min:5',
            'category'=>'required',
         ]);
         if($validate){
            $data= [
            'category_id'=> $request->category,
             'title'=> $request->desc,
            ];
       
        $schedule->update($data);
        return redirect()->route('schedule.index')->with('msg','Schedule Update Successfully');
     }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     $schedule = ScheduleEvent::find($id);
     if($schedule->delete());
     return redirect()->route('schedule.index')->with('msg','Schedule Delete Successfully');
    }
}
