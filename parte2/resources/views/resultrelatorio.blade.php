<!DOCTYPE html>
<html>
    <head>
        <title>Menu de Opções</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

        <script type="text/javascript">
            $("#dtinicio").mask("00/00/0000");
            $("#dtfim").mask("00/00/0000");
        </script>
    </head>
<body>

<div class="container">
 
    <h1>Relatórios - Resultados</h1>
 
    <hr />
 
    <div class="form-group">
        @foreach ( $results as $r )

        <p class="form-control">
          Cliente:  {{ $r->cliente }}<br>
          Valor Total Investido : {{ $r->periodo }}<br>
          Quantidade Máxima de Visualizações : Teste<br>
          Quantidade Máxima de Cliques : Teste<br>
          Quantidade Máxima de Compartilhamentos : Teste<br>
        </p>
        
        @endforeach        

</div>
 
</div>

</body>
</html>
