<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id','desc')->get();
        return view('dashboard.categorias',compact('categories'));
    }
    public function agregarRegistro(Request $request)
    {
        $category = New Category;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();
        return response()->json($category);
    }
    public function editarRegistro(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();
        return response()->json($category);
    }
    public function eliminar(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $respuesta = $category->delete() ? 1 : 0;
        return $respuesta;
    }
}
