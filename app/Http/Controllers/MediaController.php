<?php

namespace App\Http\Controllers;

use App\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagenes = Media::orderBy('id','desc')->get();
        return view('dashboard.media',compact('imagenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        //
    }
    public function subirImagen(Request $request)
    {
        $media = New Media;

        $extension = $request->imagen;
        $extension = $request->imagen->getClientOriginalExtension();
        $dir = 'img/media/';
        $filename = uniqid().'_'.time().'_'.date('Ymd').'.'.$extension;
        $path = $request->imagen->move($dir, $filename);

        $media->path = $dir . $filename;
        $media->name = $request->name;
        $media->alt = $request->alt;
        $media->description = $request->description;

        $media->save();
        return response()->json($media);
    }
    public function editarImagen(Request $request)
    {
        $media = Media::findOrFail($request->id);

        if ($request->imagen <> 'undefined') {
            $extension = $request->imagen;
            $extension = $request->imagen->getClientOriginalExtension();
            $dir = 'img/media/';
            $filename = uniqid().'_'.time().'_'.date('Ymd').'.'.$extension;
            $path = $request->imagen->move($dir, $filename);
            $media->path = $dir . $filename;
        }


        $media->name = $request->name;
        $media->alt = $request->alt;
        $media->description = $request->description;

        $media->save();
        return response()->json($media);
        // return response()->json($request->id);
    }
    public function eliminar(Request $request)
    {
        $media = Media::findOrFail($request->id);
        $respuesta = $media->delete() ? 1 : 0;
        return $respuesta;
    }
}
