<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\EventSpeaker;
use App\Models\Eventtype;
use App\Models\PostBlog;
use App\Models\ScheduleEvent;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendHomeController extends Controller
{
    public function index(){
        $eventtype = Eventtype::get();
        $categories = Category::get();
        $blog       =PostBlog::get();
        $flashMessage = session('msg');
        return Inertia::render('Home',compact('eventtype','categories','flashMessage','blog'));
    
    }
    public function schedule(){
        $schedule =ScheduleEvent::get();
        return Inertia::render('Schedule',compact('schedule'));
    }
    public function speaker(){
        $speakers = EventSpeaker::get();
        return Inertia::render('Speaker',compact('speakers'));
    }
    public function blog(){
        $blog =PostBlog::get();
        return Inertia::render('Blog',compact('blog'));
    }
    public function about(){
        return Inertia::render('About');
    }
}
