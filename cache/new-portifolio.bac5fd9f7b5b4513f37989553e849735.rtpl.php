<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <div class="box-header with-border">
                        <h3 class="box-title">Novo Produto</h3>
                      </div>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
              <div class="col-md-12">
                  <div class="box box-danger">
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="/admin/products/create" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="desproduct">Nome da produto</label>
                      <input type="text" class="form-control" id="desproduct" name="desproduct" placeholder="Digite o nome do produto">
                    </div>
                    <div class="form-group">
                      <label for="vlprice">Preço</label>
                      <input type="number" class="form-control" id="vlprice" name="vlprice" step="0.01" placeholder="0.00">
                    </div>
                    <div class="form-group">
                      <label for="vlwidth">Largura</label>
                      <input type="number" class="form-control" id="vlwidth" name="vlwidth" step="0.01" placeholder="0.00">
                    </div>
                    <div class="form-group">
                      <label for="vlheight">Altura</label>
                      <input type="number" class="form-control" id="vlheight" name="vlheight" step="0.01" placeholder="0.00">
                    </div>
                    <div class="form-group">
                      <label for="vllength">Comprimento</label>
                      <input type="number" class="form-control" id="vllength" name="vllength" step="0.01" placeholder="0.00">
                    </div>
                    <div class="form-group">
                      <label for="vlweight">Peso</label>
                      <input type="number" class="form-control" id="vlweight" name="vlweight" step="0.01" placeholder="0.00">
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                  </div>
                </form>
              </div>
              </div>
          </div>
        
        </section>
        <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Posts</h1>
                <button class="btn btn-danger" id="btnNovoPost">Adicionar Novo</button><br>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-8">
              <div class="card card-danger card-outline">
                <div class="card-header">
                  <h3 class="card-title">Criar Novo Post</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="form-group">
                    <label><h4><strong>Adicionar novo post</strong></h4></label>
                    <input class="form-control" placeholder="Digite o título aqui">
                  </div>
                  <div class="form-group">
                      <textarea id="compose-textarea" class="form-control" style="height: 300px">
                        
                      </textarea>
                  </div>
                  <div class="form-group">
                    <div class="btn btn-default btn-file">
                      <i class="fas fa-paperclip"></i> Anexo
                      <input type="file" name="attachment">
                    </div>
                    <p class="help-block">Max. 32MB</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container-fluid">
                <div class="row">
                    <!-- Default box -->
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Publicar</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                    </div>
                    <div class="card-body">
                      <button class="btn btn-secondary btn-sm">Salvar como rascunho</button>
                      <button class="btn btn-secondary btn-sm float-right" style="margin-left: 57px; margin-top: 30px; margin-bottom: 15px;">Visualizar</button><br><br><br>
                      <i class="fas fa-key" style="transform: rotate(-45deg);"></i><label style="margin-left: 8px;">Status: Rascunho</label><a style="margin-left: 5px;" href="#">Editar</a><br>
                      <i class="fas fa-eye"></i><label style="margin-left: 8px;">Visibilidade: Público</label><a style="margin-left: 5px;" href="#">Editar</a><br>
                      <i class="fas fa-calendar-alt"></i><label style="margin-left: 8px;">Publicar: Imediatamente</label><a style="margin-left: 5px;" href="#">Editar</a>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <a class="btn btn-danger float-right" href="#">Publicar</a>
                    </div>
                    <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
              </div>
              <div class="container-fluid">
                <div class="row">
                  <div>
                      <!-- Default box -->
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Categorias</h3>
                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Todas as categorias</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mais usadas</a>
                                  </li>
                                </ul>
                              <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" style="margin-top: 15px; margin-left: 15px;">
                                    <label class="form-check-label" for="defaultCheck1" style="margin-top: 9px; margin-left: 30px;">
                                        Jornalismo
                                    </label>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                              <a class="btn btn-danger float-right" href="#">Publicar</a>
                            </div>
                            <!-- /.card-footer-->
                      </div>
                          <!-- /.card -->
                  </div>
                </div>
              </div>
              <div class="container-fluid">
                <div class="row">
                    <!-- Default box -->
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Imagem destacada</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                    </div>
                    <div class="card-body">
                      <input type="file" class="form-control-file">
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <a class="btn btn-danger float-right" href="#">Publicar</a>
                    </div>
                    <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
              </div>
            </div>
          </div> 
        </section>
        <!-- /.content -->
      </div>