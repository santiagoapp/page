<?php

namespace App\Http\Controllers;

use App\Testimonial;
use App\Media;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        $imagenes = Media::orderBy('id','desc')->get();
        return view('dashboard.testimonial',compact('testimonials','imagenes'));
    }
    public function agregarRegistro(Request $request)
    {
        $testimonial = New Testimonial;
        $testimonial->author = $request->author;
        $testimonial->image_id = $request->featured_image;
        $testimonial->company = $request->company;
        $testimonial->content = $request->content;
        $testimonial->cargo = $request->cargo;
        $testimonial->save();
        return response()->json($testimonial);
    }
    public function eliminar(Request $request)
    {
        $testimonial = Testimonial::findOrFail($request->id);
        $respuesta = $testimonial->delete() ? 1 : 0;
        return $respuesta;
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
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
