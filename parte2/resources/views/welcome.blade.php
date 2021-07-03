<!DOCTYPE html>
<html>
    <head>
    <title>Menu de Opções</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>

<div class="container">

    <h1>Home</h1>

    <hr />

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="{{route('cadastro')}}">Cadastro de Anúncios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('filtrorelatorio')}}">Relatório</a>
        </li>        
    </ul>

</div>

</body>
</html>
