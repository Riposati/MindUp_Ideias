<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Mind Up Ideias Administração</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
	<div class="col-md-7">
        <div class="jumbotron">
          <h1>Administração</h1>
          <p>Por favor informe usuário e senha do administrador.</p>
          <p></p>
        </div>
      </div>
	  </div>
	<div class="row">
      <div class="col-md-3">
        <div class="jumbotron">
          <img src="mind.jpg" class="img-responsive img-rounded"> 
        </div>
      </div>
      <div class="col-md-4">
        <form method="post" action="sessao.php" id="formlogin" name="formlogin" >
          <div class="form-group">
            <label for="usuario">Usuário</label>
            <input class="form-control" id="usuario" name="usuario" placeholder="Entre com usuário" type="email">
          </div>
          <div class="form-group">
            <label for="senha">Senha</label>
            <input class="form-control" id="senha" name="senha" placeholder="Entre com a senha" type="password">
          </div>
          <button type="submit" class="btn btn-default">Entrar</button>
        </form>
      </div>
    </div>
  </div>

</body>

</html>