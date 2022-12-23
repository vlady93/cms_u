@extends('layouts.admin')
@section('title', 'Registrar blogs')
@section('styles')

@endsection

@section('content')

    <div id="callMe" class="bg-dark">

        <div class="container">
            <br>
            <div class="section-title text-center">REGISTRO DE INFORMACIÓN</div><br>
            <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" name="titulo" class="form-control" value="{{ $blog->titulo }}">
                        </div>
                        <div class="form-group">
                            <label for="mision">Mision</label>
                            <textarea type="text" name="mision" class="form-control">
                                    {{ $blog->mision }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="vision">Vision</label>
                            <textarea type="text" name="vision" class="form-control">
                                    {{ $blog->vision }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="objetivo">Objetivo</label>
                            <textarea for="text" name="objetivo" class="form-control">
                                    {{ $blog->objetivo }}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-7 text-center align-items-center">
                        <div class="row justify-content-center ">
                            <div class="col-6">
                                <div class="form-group">
                                    <h5 class="card-title text-center text-white">Logo Actual</h5>
                                    <img src="{{ asset('image/' . $blog->logo) }}" alt="" class="img-fluid" width="220px"
                                        height="250px">
                                </div>
                            </div>

                            <div class="col-5">
                                <div class="form-group">
                                    <h5 class="card-title text-center text-white">Logo Nuevo</h5>
                                    <input type="file" name="logo" id="logo" class="dropify" />
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <div class="form-group">
                                    <label class="text-white" for="objetivo">Fondo:</label>
                                    <input class="rounded" type="color" name="color_fondo" id="color_fondo" value="{{$blog->color_fondo}}">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label class="text-white" for="objetivo">Card:</label>
                                    <input class="rounded" type="color" name="color_card" id="color_card" value="{{$blog->color_card}}">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label class="text-white" for="objetivo">Texto:</label>
                                    <input class="rounded" type="color" name="color_texto" id="color_texto" value="{{$blog->color_texto}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row mx-auto">
                    <div class="col-3"></div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">REGISTRAR</button>
                        </div>
                    </div>

                </div>
            </form>

            <div class="content-wrapper">
                <div class="container">
                    <label for="">
                        <h3>Imagenes</h3>
                    </label>
                    <div class="row">
                        <div class="col">
                            <div class="card-columns">
                                @foreach ($files as $file)
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset($file->url) }}" alt="">
                                        <div class="card-body">
                                            <form action="{{ route('imagens.destroy', $file->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Borrar</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of call me form -->
@endsection
@section('scripts')
    {!! Html::script('../melody/js/dropify.js') !!}
@endsection
