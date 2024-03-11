<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $sponsors =Sponsor::get();
        return view('backend.sponsor.index',compact('sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::get();
        return Inertia::render('Sponsor',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'company_name'=>'required|min:4',
            'logo'=>'mimes:jpg,jpeg,png',
            'desc'=>'required|min:6|max:400',
            'location'=>'required|min:4|max:500',
            

        ]);
        $filename = time(). "." . $request->logo->extension();
        if($validate){
           $data= [
            'company_name'=>$request->company_name,
            'logo'=>$filename,
            'description'=>$request->desc,
            'company_location'=>$request->location,
            'category_id'=>$request->category,
           ];
           $model = new Sponsor();
           if($model->create($data));
           $request->logo->move('uploads/', $filename);
           return redirect()->route('sponsor.index')->with('msg','soponsor Inserted Successfully');
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
        $category =Category::get();
        $sponsors =Sponsor::find($id);
        return view('backend.sponsor.edit',compact('category','sponsors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sponsor = Sponsor::find($id);

        $validate = $request->validate([
            'company_name'=>'required|min:4',
            'logo'=>'mimes:jpg,jpeg,png',
            'desc'=>'required|min:6|max:400',
            'location'=>'required|min:4|max:500',
             ]);
             $filename = time(). "." . $request->logo->extension();
             if($validate){
                $data= [
                 'company_name'=>$request->company_name,
                 'logo'=>$filename,
                 'description'=>$request->desc,
                 'company_location'=>$request->location,
                 'category_id'=>$request->category,
                ];
                $sponsor->update($data);
                $request->logo->move('uploads',$filename);
                return redirect()->route('sponsor.index')->with('update Successfully');

    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sponsor = Sponsor::find($id);
        if($sponsor->delete());
        return redirect()->route('sponsor.index')->with('msg','Delete Successfully');
    }
}
