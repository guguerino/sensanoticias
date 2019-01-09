@extends('layouts.app')

@section('content')
<div class="fluid-container">
    @include('recentes');
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
                    

                    <form method = 'POST' action = '{!!url("noticia")!!}'>
                        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                        <input id="replicaConteudo" type = 'hidden' name = 'Conteudo' value = ''>
                        <div class="form-group">
                            <label for="Titulo">Titulo</label>
                            <input id="Titulo" name = "Titulo" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Conteudo">Conteudo</label>
                            <!-- Create toolbar container -->
                            <div id="toolbar"></div>
                            <div id="Conteudo"></div>
                        </div>
                        <button class = 'btn btn-success btn-lg' type ='submit'> <i class="fa fa-floppy-o"></i> Publicar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote', 'code-block'],

        [{ 'header': 1 }, { 'header': 2 }],               // custom button values
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
        [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
        [{ 'direction': 'rtl' }],                         // text direction
        [ 'link', 'image', 'formula' ,'video'],
        [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

        [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
        [{ 'font': [] }],
        [{ 'align': [] }],

        ['clean']                                         // remove formatting button
    ];

    var editor = new Quill('#Conteudo', {
        theme: 'snow',
        modules: {
           toolbar: toolbarOptions
        },
    });
    Quill.prototype.getHtml = function() {
        return this.container.firstChild.innerHTML;
    };
    $("body").on('DOMSubtreeModified', "#Conteudo", function() {
        $("#replicaConteudo").val(editor.getHtml());
    }); 
</script>
@endsection
