<?php

namespace App\Http\Controllers;

use App\Post;
use App\Media;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entradas = Post::orderBy('id','desc')->get();
        return view('dashboard.posts',compact('entradas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $imagenes = Media::orderBy('id','desc')->get();
        return view('dashboard.nuevo-post',compact('imagenes'));
    }

    public function agregarRegistro(Request $request)
    {
        $post = New Post;
        $post->title = $request->title;
        $post->url_friendly = $request->url_friendly;
        $post->author_id = $request->author_id;
        if ($request->image_id <> '') {
            $post->image_id = $request->image_id;
        }
        $post->excerpt = $request->excerpt;
        $post->content = $request->content;
        $post->save();
        return response()->json($post);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
