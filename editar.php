<h1>Editar Usuario</h1>
<?php
include 'config.php';
//require 'config.php';
$sql = "SELECT * FROM usuarios WHERE id =".$_REQUEST["id"];
$resultado = $conn->query($sql);
$row = $resultado->fetch_object();
?>

  <div class=cadastro>
    <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-l-4">
        <div class="card">
          <h3>Cadastre-se</h3>
        </div>
        <div class="card-body">
        <form action="?page=salvar" method="POST">
          <input type="hidden" name="acao" value="editar">
          <input type="hidden" name="id" value="<?php print $row->id; ?>">
          <div>
          <div class="mb-3">
            <label>Usuario</label>
              <input type="text" name="nome" class="form-control" value="<?=$row->nome?>" placeholder="Nome do Usuário">
              </div>
            </div>
          <div>
            <div class="mb-3">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control" placeholder="Digite sua Senha" required>
            </div>
          </div>
          <div>
            <div class="mb-3">
            <label>Data de Nascimento</label>
            <input type="date" name="data_nascimento" class="form-control" value="<?=$row->data_nascimento?>" placeholder="Digite sua data de nascimento">
            </div>
          </div>
          <div>
            <div class="mb-3">
            <label>CPF</label>
            <input type="text" name="cpf" class="form-control" value="<?=$row->cpf?>" placeholder="Digite seu CPF">
            </div>
          </div>
          <div>
            <div class="mb-3">
            <label>RG</label>
            <input type="text" name="rg=" class=form-control" value="<?=$row->rg?>" placeholder="Digite seu RG">
            </div>
          </div>
          <div>
            <div class="mb-3">
            <label>Telefone</label>
            <input type="text" name="telefone=" class=form-control" value="<?=$row->telefone?>" placeholder="Digite seu telefone">
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
