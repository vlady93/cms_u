@extends('layouts.admin')
@section('title', 'Registrar blogs')
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
@endsection

@section('content')
    <div  style="background-color: {{$blog->color_fondo}}">
        <div class="container col-8">

            <br>

            <div class="container text-center">
                <img class="img-fluid rounded-circle " width="150px" height="150px" src="{{ asset('image/' . $blog->logo) }}">

                <br><br>

                <h1 style="color: {{$blog->color_texto}}">{{ $blog->titulo }}</h1>
            </div>

            <br>

            <!-- Esto es un comentario class="d-block w-100" -->
            <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active rounded">
                        <img src="{{ asset('image/logo.svg') }}" class="d-block w-100" alt="..." width="200px"
                            height="200px">
                    </div>
                  
                    @foreach ($imagenes as $imagen)
                        <div class="carousel-item rounded">
                            <img src="{{ asset($imagen->url) }}" class=" mx-auto d-block w-100 " width="200px" height="200px"
                                alt="...">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <br>
            <br>
            
    <!-- Intro -->
    <div id="intro" class="">
        <div class=" container">
            <div class="row justify-content-center">
                <div class="col-lg-3 rounded border border-dark shadow-lg p-3 mb-5 mr-3" style="background-color: {{$blog->color_card}}">
                    <div class="text-container" >
                        
                        <h2 class="text-center"style="color:{{$blog->color_texto}}">MISIÓN</h2>
                        <p class="testimonial-text" style="color: {{$blog->color_texto}}">{{ $blog->mision }}</p>
                        
                    </div> <!-- end of text-container -->
                </div> 
                <div class="col-lg-3 rounded border border-dark shadow-lg p-3 mb-5 mr-3" style="background-color: {{$blog->color_card}}">
                    <div class="text-container">
                        
                        <h2 class="text-center"style="color:{{$blog->color_texto}}">VISIÓN</h2>
                        <p class="testimonial-text"style="color: {{$blog->color_texto}}">{{ $blog->vision }}</p>
                        
                    </div> <!-- end of text-container -->
                </div>
                <div class="col-lg-3 rounded border border-dark shadow-lg p-3 mb-5 mr-3" style="background-color: {{$blog->color_card}}">
                    <div class="text-container">
                       
                        <h2 class="text-center"style="color:{{$blog->color_texto}}">OBJETIVO</h2>
                        <p class="testimonial-text" style="color: {{$blog->color_texto}}"">{{ $blog->objetivo }}</p>
                        
                    </div> <!-- end of text-container -->
                </div><!-- end of col -->
                <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->
          
            <br>
            @can('ver-blog')
                <div class="container">
                    <h5 style="color: {{$blog->color_texto}}">COMENTARIO</h5>
                </div>
                <form action="{{ route('comentarios.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="text-dark">
                        <div class="form-floating">
                            <input type="text" name="blog_id" value="{{ $blog->id }}" hidden>
                            <textarea class="form-control" name="comentario" style="height: 100px"></textarea>
                            <label for="comentario">Contenido</label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Comentar</button>
                    </div>
                </form>
                @endcan
                <br>
                <br>
                <br>
                

                <div class="d-flex justify-content-evenly">
                    @foreach ($imagenes as $imagen)

                        <img src="{{ asset($imagen->url) }}" class="rounded-circle mx-auto d-block" width="100px" height="80px"
                            alt="..." style="-webkit-filter: grayscale(1); filter: gray; filter: grayscale(1); ">

                    @endforeach
                </div>
                <br>
            </div>
        </div>
    @endsection
@section('scripts')
    {!! Html::script('../melody/js/dropify.js') !!}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
