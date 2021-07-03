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
 
    <h1>Cadastro de Anúncios</h1>
 
    <hr />
 
    <form action="/enviar" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      @if(session()->has('status'))
      <div id="msg" class="alert alert-success" role="alert">
          <p>Cadastrado com sucesso!</p>
      </div>
      @endif

      @if(session()->has('obrigatorio'))
      <div id="msg" class="alert alert-danger" role="alert">
          <p>Todos os campos são obrigatórios!</p>
      </div>
      @endif
 
      <div class="form-group">
        <label for="anuncio">Nome do anúncio</label>
        <input type="text" id="anuncio" name="anuncio" class="form-control" placeholder="Nome do Anúncio">
      </div>
 
      <div class="form-group">
        <label for="cliente">Cliente</label>
        <input type="text" id="cliente" name="cliente" class="form-control" placeholder="Cliente">
      </div>

      <div class="form-group">
        <label for="dtinicio">Data de Início</label>
        <input type="text" id="dtinicio" name="dtinicio" class="form-control" placeholder="Data de Início">
      </div>
 
      <div class="form-group">
        <label for="dtfim">Data de Término</label>
        <input type="text" id="dtfim" name="dtfim" class="form-control" placeholder="Data de Término">
      </div>

      <div class="form-group">
        <label for="investimento">Investimento</label>
        <input type="number" id="investimento" name="investimento" class="form-control" placeholder="Investimento">
      </div>
 
      <button type="submit" class="btn btn-default">Enviar</button>
      <a href="{{ route('home') }}"> Home</a>      
    </form>
 
</div>

</body>
</html>
