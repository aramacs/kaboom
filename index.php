<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Kaboom  - Gerenciador de Clientes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page=novo">Cadastrar Usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page=listar">Listar Usuario</a>
        </li>
      </ul>
    </div>
  </div>
</nav> 

<div class="container">
  <div class="row">
    <div class=col mt-5>
      <?php
        switch (@$_REQUEST['page']) {
            case 'novo':
                include 'usuario.php';
                break;

            case 'listar':
                include 'listar.php';
                break;

            default:
                print '<h1>Seja Bem-Vindo(a)</h1>';
                break;
        }
      ?>
    </div>
  </div>
</div>

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
