<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class EmplyEvantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employlist = DB::table('evtemplys')->get();
        return view('backend.employeelist.index',compact('employlist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $categories = DB::table('categories')->get();
        return view('backend.employeelist.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'emply_name'=>'required',
            'phone'=>'required',
             'email'=>'required',
            'working_location'=>'required',
            'regaindate'=>'required',
            'joindate'=>'required',
            // dd($request->all())
        ]);
        $data =array(
            'categories_id'=>$request->category,
            'emply_name'=>$request->emply_name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'working_location'=>$request->working_location,
            'joining_date'=>$request->joindate,
            'regained_date'=>$request->regaindate,
        );
        DB::table('evtemplys')->insert($data);
        return redirect()->route('employeelist.index')->with('msg','Employee Inserted Successfully');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee =DB::table('evtemplys')->find($id);
        return view('backend.employeelist.view',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = DB::table('categories')->get();
        $employee = DB::table('evtemplys')->where('id',$id)->first();
        return view('backend.employeelist.edit',compact('employee','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'emply_name'=>'required',
            'phone'=>'required',
             'email'=>'required',
            'working_location'=>'required',
            'regaindate'=>'required',
            'joindate'=>'required',
            // dd($request->all())
        ]);
        $data = array(
            'categories_id'=>$request->category,
            'emply_name'=>$request->emply_name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'working_location'=>$request->working_location,
            'joining_date'=>$request->joindate,
            'regained_date'=>$request->regaindate,
        );
        DB::table('evtemplys')->where('id',$id)->update($data);
        return redirect()->route('employeelist.index')->with('msg','Employee Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         DB::table('evtemplys')->where('id',$id)->delete();
         return redirect()->route('employeelist.index')->with('msg','Employee List Delete Successfully');

    }
}
