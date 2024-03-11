<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\EquipmentCompany;
use App\Models\EquipmentService;
use Illuminate\Http\Request;

class EquipmentServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicelists = EquipmentService::get();
     return view('backend.service_list.index',compact('servicelists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        $equipments = EquipmentCompany::get();
        return view('backend.service_list.create',compact('categories','equipments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'email'=>'required|email',
            'phone'=>'required|numeric',
            'logo'=>'mimes:jpg,jpeg,png',
            'desc'=>'required|min:6|max:400',
            'address'=>'required|min:4|max:100',
            

        ]);
        $filename = time(). "." . $request->logo->extension();
        if($validate){
           $data= [
            'email'=>$request->email,
            'phone'=>$request->phone,
            'logo'=>$filename,
            'descripation'=>$request->desc,
            'address'=>$request->address,
            'category_id'=>$request->category,
            'equipment_companies_id'=>$request->company_list,
           ];
           $model = new EquipmentService();
           if($model->create($data));
           $request->logo->move('uploads/', $filename);
           return redirect()->route('servicelist.index')->with('msg','servicelist Inserted Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = Category::get();
        $equipments = EquipmentCompany::get();
        $servicelists =EquipmentService::find($id);
        return view('backend.service_list.view',compact('categories','equipments','servicelists'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::get();
        $equipments = EquipmentCompany::get();
        $servicelists =EquipmentService::find($id);
        return view('backend.service_list.edit',compact('categories','equipments','servicelists'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $servicelist = EquipmentService::find($id);
        $validate = $request->validate([
            'email'=>'required|email',
            'phone'=>'required|numeric',
            'logo'=>'mimes:jpg,jpeg,png',
            'desc'=>'required|min:6|max:400',
            'address'=>'required|min:4|max:100',
            

        ]);
        $filename = time(). "." . $request->logo->extension();
        if($validate){
           $data= [
            'email'=>$request->email,
            'phone'=>$request->phone,
            'logo'=>$filename,
            'descripation'=>$request->desc,
            'address'=>$request->address,
            'category_id'=>$request->category,
            'equipment_companies_id'=>$request->company_list,
           ];
        
           if($servicelist->update($data));
           $request->logo->move('uploads/', $filename);
           return redirect()->route('servicelist.index')->with('msg','servicelist Update Successfully');
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $servicelist = EquipmentService::find($id);
        if($servicelist->delete());
        return redirect()->route('servicelist.index')->with('msg','Servicelist Delete Successfully');
    }
}
