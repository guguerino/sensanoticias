@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Ultimas publicações:</div>
                <br>
                <div class="card-body">
                        <div class="alert alert-danger" role="alert">
                            Sem publicações recentes..
                        </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Bloco superior home -->
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-4101038308433961"
                data-ad-slot="2186271338"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Crie sua própria publicação:</div>
                <div class="card-body">
                        <!-- Create the editor container -->
                        <div id="editor">
                            <p>Crie sua própria publicação!</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  var editor = new Quill('#editor', {
    theme: 'snow'
  });
</script>
@endsection
