<!doctype html>

<head>
    <meta charset="utf-8">
    <html lang="pt" xml:lang="pt" xmlns="http://www.w3.org/1999/xhtml">
    <meta name="description" content="Pisval Tech - Contacte-nos e teremos todo o gosto em ajudar!">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://www.googleoptimize.com/optimize.js?id=OPT-WBQPGGX"></script>
    <title>Contactos - Luanda | Cape Town Design Website, Aplicativos Moveis, Online Marketing, SEO - Motor de busca, Logo Design
    </title>
    @extends('layouts.master')


    @section('content')

</head>
<html>

<body>

    <!--Jumbotron-->
    <div id="contact_id" class="jumbotron jumbotron-fluid">
        <div class="container">
            <div id="contact_more">
                <h1 class="display-4">Contacte-nos</h1>
                <h3 class="lead">Sinta-se à vontade para nos perguntar qualquer coisa!</h3>
            </div>
        </div>
    </div>



    <section id="form_id_ox">

        <div class="col-md-12">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li id="list_id">{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        @if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{\Session::get('success') }}</p>
        </div>
        @endif
        <form id="id_form" action="submit" method="POST">
            @csrf
            <div class="form-group">
                <input name="nome" type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp"
                    placeholder="Nome">
            </div>

            <div class="form-group">
                <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Email">
            </div>

            <div class="form-group">
                <input name="númeroTel" type="number" class="form-control" id="exampleInputTel"
                    aria-describedby="telHelp" placeholder="Numero do Telefone">
            </div>

            <div class="form-group">
                <input name="nomeProjecto" type="text" class="form-control" id="" aria-describedby="textHelp"
                    placeholder="Nome do Projecto">
            </div>

            <div class="form-group">
                <textarea name="objectivoProjecto" type="text" class="form-control" id="exampleFormControlTextarea1" s
                    placeholder="Objectivo do Projecto"></textarea>
            </div>

            <!--
                                            <div class="form-group form-check">
                                                <input name="confirmarAssinatura" type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Assine o boletim
                                                    informativo</label>
                                            </div>-->

            <button type="submit" class="btn btn-primary">ENVIAR PEDIDO</button>

        </form>
    </section>


</html>
</body>
@endsection
