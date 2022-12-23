@extends('layouts.admin')
@section('title', 'Registrar blogs')
@section('styles')

@endsection

@section('content')

    <div class="row mx-auto">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card mt-2"><br>
                <div class="card-title text-center">
                    <h3 class="mt-2">Lista de Empresas Registradas</h3>
                </div>
                <div class="card-body">
                    @can('crear-blog')
                        <a class="btn btn-warning mb-3" href="{{ route('blogs.create') }}">Nuevo</a>
                    @endcan

                    <table class="table table-striped mt-1">
                        <thead style="background-color:#113448">
                            <th style="display: none;">ID</th>
                            <th style="color:#fff;">Titulo</th>
                            <th style="color:#fff;">Contenido</th>
                            <th style="color:#fff;">Acciones</th>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                <tr>
                                    <td style="display: none;">{{ $blog->id }}</td>
                                    <td> <a href="{{ route('blogs.show', $blog) }}">
                                            <strong>{{ $blog->titulo }}</strong></a></td>
                                    <td>{{ $blog->user->name}}</td>
                                    <td>

                                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                            @can('editar-blog')
                                                <a class="btn btn-info" href="{{ route('blogs.edit', $blog->id) }}">Editar</a>
                                            @endcan

                                            @can('editar-blog')
                                                <a class="btn btn-success"
                                                    href="{{ route('imagens.create', ['id' => $blog->id]) }}">Imagenes</a>
                                            @endcan
                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-blog')
                                                <button type="submit" class="btn btn-danger">Borrar</button>
                                            @endcan

                                        </form>
                                    </td>
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
