<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::orderBy('id','desc')->get();
        return view('dashboard.etiquetas',compact('tags'));
    }
    public function agregarRegistro(Request $request)
    {
        $tag = New Tag;
        $tag->name = $request->name;
        $tag->slug = $request->slug;
        $tag->save();
        return response()->json($tag);
    }
    public function editarRegistro(Request $request)
    {
        $tag = Tag::findOrFail($request->id);
        $tag->name = $request->name;
        $tag->slug = $request->slug;
        $tag->save();
        return response()->json($tag);
    }
    public function eliminar(Request $request)
    {
        $tag = Tag::findOrFail($request->id);
        $respuesta = $tag->delete() ? 1 : 0;
        return $respuesta;
    }
}
