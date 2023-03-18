<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::get();
        return view('blog/index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('blog/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {   
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string',
                'description' => 'required|string',
            ]
            );

            // store data
         Blog::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back();  
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog, $id)
    {
        $blog = Blog::find($id);
       
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog, $id)
    {
        $blog = Blog::find($id);

        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string',
                'description' => 'required|string',
            ]
            );

        // update data
        $blog->update($validator->validate());

        return redirect()->route('blog');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Blog $blog)
    {
        
    }
}
