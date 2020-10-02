<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;


class BlogController extends Controller
{

    public function index () {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function create () {
        return view('blogs.create');
    }

    public function store (Request $request) {

        $this->validate($request, [
            'title' => 'required',          // title is the name of the input form
            'description' => 'required'
        ]);

        $blog = Blog::create([
            'name' => $request->title,
            'description'   => $request->description
        ]);

        // return redirect('/blogs/'.$blog->id); // /blogs/12
        return redirect('/blogs');
    }

    public function show($id) { // /blogs/1 $id = 1     //blogs/2 $id = 2
            $blog = Blog::find($id); // Blog::where('id',2)->get();
            return view('blogs.show', compact('blog'));
    }

    public function edit ($id) { // /blogs/10/edit $id = 10
        $blog = Blog::find($id); 
        return view('blogs.edit', compact('blog'));
    }

    public function update (Request $request, $id) {
        $this->validate($request, [
            'title' => 'required',          // title is the name of the input form
            'description' => 'required'
        ]);


        $blog = Blog::find($id);
        $blog->name = $request->title;
        $blog->description = $request->description;
        $blog->save();

        return redirect('/blogs/'.$blog->id);
    }

    public function destroy ($id) {
        Blog::find($id)->delete();
        return redirect('/blogs');
    }
}
