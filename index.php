<!DOCTYPE html>
<html lang="en">
<head>
<title>signup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class=cadastro>
    <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4">
        <div class="card">
          <h3>Cadastre-se</h3>
        </div>
        <div class="card-body">
        <form action="includes/signup.incl.php" method="post">
          <div>
          <div class="mb-3">
            <label>Usuario</label>
              <input type="text" name="uid" class="form-control" placeholder="Nome do Usuário">
              </div>
            </div>
          <div>
          <div class="mb-3">
            <label>Email</label>
              <input type="text" name="email" class="form-control" placeholder="Email">
              </div>
            </div>
          <div>
            <div class="mb-3">
            <label>Senha</label>
            <input type="password" name="pwd" class="form-control" placeholder="Digite sua Senha">
            </div>
          </div>
          <div>
            <div class="mb-3">
            <label>Confirmar Senha</label>
            <input type="password" name="pwdRepeat" class="form-control" placeholder="Confirme sua Senha">
            </div>
            </div>
          <div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
