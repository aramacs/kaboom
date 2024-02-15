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
            <label>Data de Nascimento</label>
            <input type="date" name="data_nascimento" class="form-control" placeholder="Digite sua data de nascimento">
            </div>
          </div>
          <div>
            <div class="mb-3">
            <label>CPF</label>
            <input type="text" name="cpf" class="form-control" placeholder="Digite seu CPF">
            </div>
          </div>
          <div>
            <div class="mb-3">
            <label>RG</label>
            <input type="text" name="rg" class=form-control" placeholder="Digite seu RG">
            </div>
          </div>
          <div>
            <div class="mb-3">
            <label>Telefone</label>
            <input type="text" name="telefone" class=form-control" placeholder="Digite seu RG">
            </div>
          </div>
          <div>
            <div class="mb-3">
            <label>endereco</label>
            <input type="text" name="endereco_id" class=form-control" placeholder="Digite seu endereco">
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
