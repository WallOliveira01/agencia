<?php if(!class_exists('Rain\Tpl')){exit;}?>  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Perfil</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row" action="/admin/profile" method="post" enctype="multipart/form-data">
              <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-danger card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center upload-btn-wrapper">
                      <button class="btn"><img class="profile-user-img img-fluid img-circle" src="<?php echo htmlspecialchars( $user["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Imagem de perfil do usuário"></button>
                      <input type="file" name="desphoto">
                    </div>
    
                    <h3 class="profile-username text-center"><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
    
                    <p class="text-muted text-center"><?php echo htmlspecialchars( $user["desfunction"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>

                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- /.card -->
              </div>

              
              <!-- /.col -->
              <div class="col-md-9">
                <div class="card">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Dados</a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">
                      
                      <div class="tab-pane" id="settings">
                        <form class="form-horizontal">
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Nome</label>
    
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="desperson" name="desperson" value="<?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputlogin" class="col-sm-2 control-label">Login</label>
    
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="deslogin" name="deslogin" value="<?php echo htmlspecialchars( $user["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>
                          </div>
                          <div class="form-group">
                             <label for="inputphone" class="col-sm-2 control-label">Telefone</label>
        
                             <div class="col-sm-10">
                                    <input type="tel" class="form-control" id="nrphone" name="nrphone" value="<?php echo htmlspecialchars( $user["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                             </div>
                          </div>
                          <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>
        
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="desemail" name="desemail" value="<?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>
                          </div>
                          <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Selecione a função</label>
        
                                <div class="col-sm-10">
                                  <select id="desfunction" name="desfunction" class="form-control">
                                      <option value="<?php echo htmlspecialchars( $user["desfunction"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $user["desfunction"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                                      <option value="Editor de Vídeo">Editor de Vídeo</option>
                                      <option value="Cinegrafista">Cinegrafista</option>
                                      <option value="Diretor Geral">Diretor Geral</option>
                                      <option value="Fotógrafo">Fotógrafo</option>
                                      <option value="Desenvolvedor Web">Desenvolvedor Web</option>
                                    </select>
                                </div>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="inadmin" value="1" <?php if( $user["inadmin"] == 1 ){ ?>checked<?php } ?>> Acesso de Administrador
                            </label>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-danger">Salvar</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>

    