<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;


class ImagenController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-imagen|crear-imagen|borrar-imagen')->only('index');
         $this->middleware('permission:crear-imagen', ['only' => ['create','store']]);
         $this->middleware('permission:borrar-imagen', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $idb=$request->id;
       

        return view('imagen.crear',compact('idb'));
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $imagenes = $request->file('file')->store('public/imagenes');
        $idb=$request->blog_id;
        $url = Storage::url($imagenes);
        Imagen::create([
            'url'=> $url,
            'blog_id'=>$idb,
        ]);
        
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function edit(Imagen $imagen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imagen $imagen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   $imagen=Imagen::find($id);
        $imagen->delete();
        return redirect('blogs/'.$imagen->blog_id.'/edit')->with('eliminar');
    }
    
    
}
