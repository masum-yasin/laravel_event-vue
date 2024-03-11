<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::get();
        return view('frontend.contact.index',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact =new Contact();
        $validata = $request->validate(
            [
                'name'=>'required|min:4',
                'email'=>'required|email',
                'phone'=>'required|min:5',
                'subject'=>'required|min:6',
                'address'=>'required|min:6',
               
            ]);
            if($validata){
                $data = [
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'subject'=>$request->subject,
                    'address'=>$request->address,
                ];
                $contact->insert($data);
                return redirect('frontend.contact')->with('msg','Contact Successfully inserted');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::find($id);
        if($contact->delete());
        return redirect()->route('contact.index')->with('msg','User Contact Delete Successfully');
    }
}
