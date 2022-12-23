@extends('layouts.admin')
@section('title','Registrar categoría')
@section('styles')
{!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css') !!}
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">CSubir imagenes al Blog</h3>
    </div>
    <div class="section-body">
        <div class="row">
           
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin ">
        <div class="card">
            <div class="card-body">
           
                    <h5>Subir Imagenes</h5>
                    {!! Form::open(['route'=>'imagens.store', 'method'=>'POST','files' => true,'class'=>'dropzone','id'=>'my-awesome-dropzone']) !!}
    
                    {!! Form::close() !!}
                   
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>

</section>

   
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
{!! Html::script('melody/js/dropify.js') !!}
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js" integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    Dropzone.options.myAwesomeDropzone = {
        headers:{
            'X-CSRF-TOKEN':"{{csrf_token()}}"
        },

        dictDefaultMessage: "Arrastre la imagen al recuadro para subirlo",
        acceptedFiles: "image/*",
        maxFilesize:2,
        maxFiles:4,
    };
</script>
@endsection