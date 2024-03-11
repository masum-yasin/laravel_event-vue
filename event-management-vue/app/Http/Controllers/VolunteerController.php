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
        // dd($volunteer);
   
        if(Auth::guard('volunteer')->attempt(['email'=>$volunteer['email'],'password'=> $volunteer['password']])){
            return redirect()->route('volunteer.voldashboard');
        }
        else{
           return redirect()->route('volunteer_login_form');
        }
    }

   
    public function voldashboard()
    {
      
        return view('volunteer.voldashboard');
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
