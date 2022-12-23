<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\Imagen;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-blog|crear-blog|editar-blog|borrar-blog')->only('index');
        $this->middleware('permission:crear-blog', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-blog', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-blog', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Auth::user()->id;
        if ($usuario != '1')
            $blogs = Blog::where('user_id', '=', $usuario)
                ->get();
        else
            $blogs = Blog::get();


        return view('blogs.index', compact('blogs'));
        //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $blogs->links() !!}    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('blogs.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $usuario = Auth::user()->id;
        $blog = $request->all() + [
            'user_id' => Auth::user()->id,
        ];
        if ($logo = $request->file('logo')) {
            $logob = time() . '_' . $logo->getClientOriginalName();
            $logo->move(public_path("/image"), $logob);
            $blog['logo'] = "$logob";
        }
        $blog['user_id'] = "$usuario";

        Blog::create($blog);

        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $imagenes = Imagen::where('blog_id', $blog->id)->get();

        return view('blogs.show', compact('blog', 'imagenes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $files = Imagen::where('blog_id', $blog->id)->get();
        return view('blogs.editar', compact('blog', 'files'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $ublog = $request->all();
        if ($logo = $request->file('logo')) {
            $logob = time() . '_' . $logo->getClientOriginalName();
            $logo->move(public_path("/image"), $logob);
            $ublog['logo'] = "$logob";
        } else {
            unset($ublog['logo']);
        }
        $blog->update($ublog);
        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();


        return redirect()->route('blogs.index')->with('notice', 'El usuario ha sido eliminado correctamente.');;
    }
}
