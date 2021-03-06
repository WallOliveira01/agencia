<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
            <div class="card card-danger">
                <form id="formNewMember"  role="form" action="/admin/team/create" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="lblNome">Nome</label>
                      <input type="text" class="form-control" id="desperson" name="desperson" placeholder="Usuário" required>
                    </div>
                    <div class="form-group">
                        <label for="slcFunction">Selecione a função</label>
                        <select id="desfunction" name="desfunction" class="form-control">
                          <option selected>Escolha...</option>
                          <option value="Editor de Vídeo">Editor de Vídeo</option>
                          <option value="Cinegrafista">Cinegrafista</option>
                          <option value="Diretor Geral">Diretor Geral</option>
                          <option value="Fotógrafo">Fotógrafo</option>
                          <option value="Desenvolvedor Web">Desenvolvedor Web</option>
                        </select>
                      </div>
                    <div class="form-group">
                      <label for="lblPassword">Imagem de Perfil</label><br>
                      <cite>Tamanho Recomendado: <strong>160x160</strong></cite>
                      <input type="file" class="form-control-file" id="desphoto" name="desphoto">
                      <div class="box box-widget">
                        <div class="box-body">
                          <img class="img-thumbnail" id="image-preview" style="margin-top: 5px;">
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fab fa-facebook-f"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="http://facebook.com/exemplo" aria-label="Facebook" aria-describedby="basic-addon1" id="desfacebook" name="desfacebook">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fab fa-instagram"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="http://instagram.com/exemplo" aria-label="Instagram" aria-describedby="basic-addon1" id="desinstagram" name="desinstagram">
                    </div>
                    <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fab fa-dribbble"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="http://site.com" aria-label="Site" aria-describedby="basic-addon1" id="dessite" name="dessite">
                        </div> 
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-danger" style="margin-bottom: 20px;">Cadastrar</button>
                  </div>
                </form>
              </div>
          </section>
    </div>
    
    