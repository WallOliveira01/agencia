<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
        <div class="card card-danger">
            <form id="formNewUser"  role="form" action="/admin/users/create" method="post">
              <div class="card-body">
                <div class="form-group">
                  <label for="lblEmail">Endereço de Email</label>
                  <input type="email" class="form-control" id="desemail" name="desemail" placeholder="Insira o email" required>
                </div>
                <div class="form-group">
                  <label for="lblNome">Nome</label>
                  <input type="text" class="form-control" id="desperson" name="desperson" placeholder="Usuário" required>
                </div>
                <div class="form-group">
                    <label for="lblLogin">Login</label>
                    <input type="text" class="form-control" id="deslogin" name="deslogin" placeholder="Login" required>
                </div>
                <div class="form-group">
                  <label for="nrphone">Telefone</label>
                  <input type="tel" class="form-control" id="nrphone" name="nrphone" placeholder="Digite o telefone">
                </div>
                <div class="form-group">
                  <label for="lblPassword">Senha</label>
                  <input type="password" class="form-control" id="despassword" name="despassword" placeholder="Senha" required minlength="8">
                </div>
                <div class="form-group">
                    <label for="lblPassword">Imagem de Perfil</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    <span name="spanImageProfile"></span>
                  </div>      
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="inadmin" value="1">
                  <label class="form-check-label">Administrador</label>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-danger">Cadastrar</button>
              </div>
            </form>
          </div>
      </section>
</div>