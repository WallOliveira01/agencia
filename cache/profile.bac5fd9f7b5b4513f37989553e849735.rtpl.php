<?php if(!class_exists('Rain\Tpl')){exit;}?> <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Perfil</h1>
          </div><!-- /.col -->
        </div>
      </div>
    </div>
 
    <style>
      .image-upload>input {
        display: none;
      }

    </style>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-danger card-outline">
                <div class="card-body box-profile">
                  <form class="form-horizontal" action="/admin/profile/photo/<?php echo htmlspecialchars( $user["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post" enctype="multipart/form-data">
                  <div class="text-center">
                    <label for="desphoto">
                      <img class="profile-user-img img-fluid img-circle" id="image-preview" src="<?php echo htmlspecialchars( $user["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="User profile picture">
                    </label>
                        <input style="display: none;" type="file" id="desphoto" name="desphoto"/>
                  </div>
                  </form>
                  <h3 class="profile-username text-center"><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
  
                  <p class="text-muted text-center"><?php echo htmlspecialchars( $user["desfunction"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
  
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Followers</b> <a class="float-right">1,322</a>
                    </li>
                    <li class="list-group-item">
                      <b>Following</b> <a class="float-right">543</a>
                    </li>
                    <li class="list-group-item">
                      <b>Friends</b> <a class="float-right">13,287</a>
                    </li>
                  </ul>
  
                  <a href="#" class="btn btn-danger btn-block"><b>Follow</b></a>
                </div>
                <!-- /.card-body -->
              </div>

              <!-- About Me Box -->
            <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-book mr-1"></i> Education</strong>
  
                  <p class="text-muted">
                    B.S. in Computer Science from the University of Tennessee at Knoxville
                  </p>
  
                  <hr>
  
                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
  
                  <p class="text-muted">Malibu, California</p>
  
                  <hr>
  
                  <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
  
                  <p class="text-muted">
                    <span class="tag tag-danger">UI Design</span>
                    <span class="tag tag-success">Coding</span>
                    <span class="tag tag-info">Javascript</span>
                    <span class="tag tag-warning">PHP</span>
                    <span class="tag tag-danger">Node.js</span>
                  </p>
  
                  <hr>
  
                  <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
  
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                </div>
                <!-- /.card-body -->
              </div>
          </div>
          <div class="col-md-9">
              <div class="card">
                  <div class="card-header p-2">
                    <h4 class="m-0 text-dark">Dados Pessoais</h4>
                  </div><!-- /.card-header -->
                    <div class="card-body">
                      <div class="tab-content">
                        <div id="settings">
                          <div class="col-md-9">
                            <?php if( $profileMsg != '' ){ ?>
                          <div class="alert alert-success">
                            <?php echo htmlspecialchars( $profileMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                          </div>
                            <?php } ?>
                            <?php if( $profileError != '' ){ ?>
                          <div class="alert alert-danger">
                            <?php echo htmlspecialchars( $profileError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                          </div>
                            <?php } ?>
                            <form class="form-horizontal" action="/admin/profile" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                <label for="desperson" class="col-sm-2 control-label">Nome</label>
        
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="desperson" name="desperson" placeholder="Digite o nome" value="<?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="deslogin" class="col-sm-2 control-label">Login</label>
        
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="deslogin" name="deslogin" placeholder="Digite o login"  value="<?php echo htmlspecialchars( $user["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="nrphone" class="col-sm-2 control-label">Telefone</label>
        
                                <div class="col-sm-10">
                                  <input type="tel" class="form-control" id="nrphone" name="nrphone" placeholder="Digite o telefone"  value="<?php echo htmlspecialchars( $user["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="desemail" class="col-sm-2 control-label">Email</label>
        
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="desemail" name="desemail" placeholder="Digite o e-mail" value="<?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="slcFunction" class="col-sm-2 control-label">Selecione a função</label>
        
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
                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <div class="checkbox">
                                    <label>
                                      <input type="checkbox" name="inadmin" value="1" <?php if( $user["inadmin"] == 1 ){ ?>checked<?php } ?>> Acesso de Administrador
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-danger">Salvar</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                        <!-- /.tab-pane -->
                      </div>
                      <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
          </div>
        </div>
      </div>
    </section>

  </div>
