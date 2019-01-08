@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Noticia Index
    </h1>
    <a href='{!!url("noticia")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>Titulo</th>
            <th>Conteudo</th>
            <th>Noticas</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($noticias as $noticia) 
            <tr>
                <td>{!!$noticia->Titulo!!}</td>
                <td>{!!$noticia->Conteudo!!}</td>
                <td>{!!$noticia->Noticas!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/noticia/{!!$noticia->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/noticia/{!!$noticia->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/noticia/{!!$noticia->id!!}'><i class = 'fa fa-eye'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $noticias->render() !!}

</section>
@endsection