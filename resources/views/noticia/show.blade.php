@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show noticia
    </h1>
    <br>
    <a href='{!!url("noticia")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Noticia Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>Titulo</b> </td>
                <td>{!!$noticia->Titulo!!}</td>
            </tr>
            <tr>
                <td> <b>Conteudo</b> </td>
                <td>{!!$noticia->Conteudo!!}</td>
            </tr>
            <tr>
                <td> <b>Noticas</b> </td>
                <td>{!!$noticia->Noticas!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection