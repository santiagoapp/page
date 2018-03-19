<?php

namespace App\Http\Controllers;

use App\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{

    public function index()
    {
        $imagenes = Media::orderBy('id','desc')->get();
        return view('dashboard.media',compact('imagenes'));
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
