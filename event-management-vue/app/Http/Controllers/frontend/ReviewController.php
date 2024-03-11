<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::get();
        return view('frontend.review.index',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reviews = Review::get();
        return view('frontend.review.review_create',compact('reviews'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //   dd($request->all());
        $data = [
                'review_title'=>$request->review_title,
                'descripation'=>$request->descripation,
                'occupation'=>$request->occupation,
                'rating'=>$request->rating,
                
                
            ];
            
            $model = new Review();
            if($model->create($data)){
               return redirect()->route('userreview.create')->with('msg','Review Inserted Successfully');
            }
        }
    

    /**
     * Display the specified resource.
     */
    public function status(Request $request,$id)
    {
        $review = Review::find($id);
        $data =[
            'status'=>$request->status,
        ];
        $review->update($data);
        return back()->with('msg','Status Inserted Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
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
     $reviews = Review::find($id);
     if($reviews->delete());
     return redirect()->route('userreview.index')->with('msg','Review Delete Successfully');
    }
}
