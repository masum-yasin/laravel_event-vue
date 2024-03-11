<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\EventSpeaker;
use App\Models\Eventtype;
use App\Models\ScheduleEvent;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendHomeController extends Controller
{
    public function index(){
        $eventtype = Eventtype::get();
        $categories = Category::get();
        return Inertia::render('Home',compact('eventtype','categories'));
    
    }
    public function schedule(){
        $schedule =ScheduleEvent::get();
        return Inertia::render('Schedule',compact('schedule'));
    }
    public function speaker(){
        $speakers =EventSpeaker::get();
        return Inertia::render('Speaker',compact('speakers'));
    }
}
