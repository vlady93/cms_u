@extends('layouts.admin')
@section('title','Lista de Comentarios')
@section('styles')
   
@endsection

@section('content')

    <div class="row mx-auto">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card mt-2"><br>
                <div class="card-title text-center">
                    <h3 class="mt-2">Lista de Comentarios</h3>
                </div>
                <div class="card-body">
         
                    <table class="table table-striped mt-1">
                        <thead style="background-color:#113448">
                            <th style="display: none;">Id</th>
                            <th style="color:#fff;">Comentario</th>
                            <th style="color:#fff;">Usuario</th>
                            <th style="color:#fff;">Blog</th>
                        </thead>
                        <tbody>
                            @foreach ($comentario as $blog)
                                <tr>
                                    <td style="display: none;">{{ $blog->id }}</td>
                                    <td> <strong>{{ $blog->comentario }}</strong></a></td>
                                    <td>{{ $blog->name}}</td>
                                    <td> {{ $blog->titulo}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>



                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>

    @endsection
    @section('scripts')
        {!! Html::script('melody/js/data-table.js') !!}
    @endsection
