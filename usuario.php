<h1>Novo Usuario</h1>

  <div class=cadastro>
    <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-l-4">
        <div class="card">
          <h3>Cadastre-se</h3>
        </div>
        <div class="card-body">
        <form action="?page=salvar" method="POST">
          <input type="hidden" name="acao" value="cadastrar">
          <div>
          <div class="mb-3">
            <label>Usuario</label>
              <input type="text" name="nome" class="form-control" placeholder="Nome do Usuário">
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
            <input type="password" name="senha" class="form-control" placeholder="Digite sua Senha">
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
