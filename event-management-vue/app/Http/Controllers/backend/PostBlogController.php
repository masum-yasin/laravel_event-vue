<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\PostBlog;
use Illuminate\Http\Request;



class PostBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $blogs=PostBlog::get();
        return view('backend.blogpost.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorys =Category::get();
        return view('backend.blogpost.create',compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validata = $request->validate([
            'post_name'=>'required|min:4',
            'image'=>'mimes:jpg,jpeg,png',
            'location'=> 'required|min:6',
            'description'=> 'required|min:6',
            'category'=>'required',
        ]);
        $filename = time(). "." . $request->image->extension();
        if($validata){
            $data = [
                'post_name'=>$request->post_name,
                'image'=>$filename,
                'location'=>$request->location,
                'description'=>$request->description,
                'category_id'=>$request->category,
            ];
            $model = new PostBlog();
            $request->image->move('uploads',$filename);
            if($model->create($data));
            return redirect()->route('blogpost.index')->with('msg','Blog Inserted Successfully');

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categorys = Category::get();
        $blogs = PostBlog::find($id);
        return view('backend.blogpost.edit',compact('categorys','blogs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blogs = PostBlog::find($id);
        $validata = $request->validate([
            'post_name'=>'required|min:4',
            'image'=>'mimes:jpg,jpeg,png',
            'location'=> 'required|min:6',
            'description'=> 'required|min:6',
            'category'=>'required',
        ]);
        $filename = time(). "." . $request->image->extension();
        if($validata){
            $data = [
                'post_name'=>$request->post_name,
                'image'=>$filename,
                'location'=>$request->location,
                'description'=>$request->description,
                'category_id'=>$request->category,
            ];
            $blogs->update($data);
            $request->image->move('uploads',$filename);
           
            return redirect()->route('blogpost.index')->with('msg','Blog Update Successfully');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blogs = PostBlog::find($id);
        if($blogs->delete());
        return redirect()->route('postblog.index')->with('msg','Blog Inserted Successfully');
    }
}
