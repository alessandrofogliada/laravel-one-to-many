<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Functions\Helper;
use App\Models\Category;


class ResourcePostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('id' ,'desc')->paginate(15);

        return view('admin.posts.index' , compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.posts.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newPost = new Post();
        $newPost->fill($data);
        $newPost->save();

        $categories = Category::all();

        // $newPost->title = $data['title'];
        // $newPost->slug = Helper::generateSlug($data['title'] , Post::class);
        // $newPost->text = $data['text'];
        // $newPost->reading_time = $data['reading_time'];

        return redirect()->route('admin.posts.show ' ,$newPost->id , compact('categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);

        return view('admin.posts.show' , compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {

        $categories = Category::all();

        return view('admin.posts.edit' , compact('post' , 'categories'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->all();

        $post->update($data);

        return redirect()->route('admin.posts.show' , $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index')->with('delete' , 'il post' . $post->title . 'è stato eliminato correttamente.');
    }
}
