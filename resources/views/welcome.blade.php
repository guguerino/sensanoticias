@extends('layouts.app')

@section('content')
<div class="fluid-container">
    <div class="row justify-content-center text-center">
        <div class="col-md-12">
            <div class="card" style="border: 0px !important;">
                <div class="card-header bg-info text-light semBordas">Ultimas publicações:</div>
                <br>
                <div class="card-body container">
                    <div class="alert alert-danger" role="alert">
                        Sem publicações recentes..
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="row justify-content-center">
        <div class="col-md-12">
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
        <div class="col-md-12">
            <div class="card semBordas">
                <div class="card-header bg-info text-center text-light semBordas">Crie sua própria publicação:</div>
                <div class="card-body container">
                        <!-- Create the editor container -->
                        <div id="editor">
                            <p>Conteudo aqui.</p>
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
