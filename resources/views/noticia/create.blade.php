@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create noticia
    </h1>
    <a href="{!!url('noticia')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Noticia Index</a>
    <br>
    <form method = 'POST' action = '{!!url("noticia")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="Titulo">Titulo</label>
            <input id="Titulo" name = "Titulo" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="Conteudo">Conteudo</label>
            <input id="Conteudo" name = "Conteudo" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="Noticas">Noticas</label>
            <input id="Noticas" name = "Noticas" type="text" class="form-control">
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection