<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    
    <!-- Main content -->
    <section class="content">
    
      <div class="row">
          <div class="col-md-12">
              <div class="box box-primary">
            <div class="box-header with-border" style="margin-top: -20px;">
              <h3 class="box-title">Editar Usuário</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/admin/users/<?php echo htmlspecialchars( $user["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="desperson">Nome</label>
                  <input type="text" class="form-control" id="desperson" name="desperson" placeholder="Digite o nome" value="<?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                </div>
                <div class="form-group">
                  <label for="deslogin">Login</label>
                  <input type="text" class="form-control" id="deslogin" name="deslogin" placeholder="Digite o login"  value="<?php echo htmlspecialchars( $user["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                </div>
                <div class="form-group">
                  <label for="nrphone">Telefone</label>
                  <input type="tel" class="form-control" id="nrphone" name="nrphone" placeholder="Digite o telefone"  value="<?php echo htmlspecialchars( $user["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                </div>
                <div class="form-group">
                  <label for="desemail">E-mail</label>
                  <input type="email" class="form-control" id="desemail" name="desemail" placeholder="Digite o e-mail" value="<?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                </div>
                <div class="form-group">
                    <label for="slcFunction">Selecione a função</label>
                    <select id="desfunction" name="desfunction" class="form-control">
                      <option value="<?php echo htmlspecialchars( $user["desfunction"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $user["desfunction"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
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
                      <img class="img-thumbnail" src="<?php echo htmlspecialchars( $user["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="image-preview" style="margin-top: 5px;">
                    </div>
                  </div>
                </div> 
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="inadmin" value="1" <?php if( $user["inadmin"] == 1 ){ ?>checked<?php } ?>> Acesso de Administrador
                  </label>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" style="margin-bottom: 20px;">Salvar</button>
              </div>
            </form>
          </div>
          </div>
      </div>
    
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    