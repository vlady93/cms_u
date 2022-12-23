<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Imagen;

use Illuminate\Http\Request;


class BlogApiController extends Controller
{
    
    public function blogapi(){
       $blogs=Blog::get();
       return $blogs; 
    }

    public function blogapishow(Blog $blog){
        $imagenes = Imagen::where('blog_id', $blog->id)->get();

        return [$blog,$imagenes];
     }
}
