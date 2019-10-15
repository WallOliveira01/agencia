<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="box-header with-border">
            <h3 class="box-title">Novo Categoria</h3>
          </div>
    </section>
    
    <!-- Main content -->
    <section class="content">
    
      <div class="row">
          <div class="col-md-12">
              <div class="box box-danger">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/admin/categories/create" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="descategory">Nome da categoria</label>
                  <input type="text" class="form-control" id="descategory" name="descategory" placeholder="Digite o nome da categoria">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-danger">Cadastrar</button>
              </div>
            </form>
          </div>
          </div>
      </div>
    
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->