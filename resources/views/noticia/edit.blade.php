@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit noticia
    </h1>
    <a href="{!!url('noticia')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Noticia Index</a>
    <br>
    <form method = 'POST' action = '{!! url("noticia")!!}/{!!$noticia->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="Titulo">Titulo</label>
            <input id="Titulo" name = "Titulo" type="text" class="form-control" value="{!!$noticia->
            Titulo!!}"> 
        </div>
        <div class="form-group">
            <label for="Conteudo">Conteudo</label>
            <input id="Conteudo" name = "Conteudo" type="text" class="form-control" value="{!!$noticia->
            Conteudo!!}"> 
        </div>
        <div class="form-group">
            <label for="Noticas">Noticas</label>
            <input id="Noticas" name = "Noticas" type="text" class="form-control" value="{!!$noticia->
            Noticas!!}"> 
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
    </form>
</section>
@endsection