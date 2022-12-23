@extends('layouts.admin')
@section('title', 'Registrar blogs')
@section('styles')

@endsection

@section('content')
    <div id="callMe" class="bg-dark">
        <div class="container">
            <br>
            <div class="section-title text-center">REGISTRO DE INFORMACIÓN</div><br>
            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="titulo" name="titulo" required>
                            <label class="label-control" for="titulo">Titulo</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control-input" id="mision" name="mision" required></textarea>
                            <label class="label-control" for="mision">Misión</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control-input" id="vision" name="vision" required></textarea>
                            <label class="label-control" for="vision">Visión</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control-input" id="objetivo" name="objetivo"
                                required></textarea>
                            <label class="label-control" for="objetivo">Objetivo</label>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center align-items-center">
                        <div class="form-group">
                            <h5 class="card-title text-center text-white">Logo</h5>
                            <input type="file" name="logo" id="logo" class="dropify" />
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <div class="form-group">
                                    <label class="text-white" for="objetivo">Fondo:</label>
                                    <input type="color" name="color_fondo" id="color_fondo">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label class="text-white" for="objetivo">Card:</label>
                                    <input type="color" name="color_card" id="color_card">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label class="text-white" for="objetivo">Texto:</label>
                                    <input type="color" name="color_texto" id="color_texto">
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


        </div>
    </div>
    <!-- end of call me form -->
@endsection
@section('scripts')
    {!! Html::script('../melody/js/dropify.js') !!}
@endsection
