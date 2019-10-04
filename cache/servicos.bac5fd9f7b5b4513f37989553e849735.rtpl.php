<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Serviços</h1>
            <a class="btn btn-danger" href="/admin/users/create">Adicionar Novo</a><br>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">     
                    <div class="box-body no-padding">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="width: 10px">#</th>
                            <th>Serviço</th>
                            <th>Descrição</th>
                            <th style="width: 140px">&nbsp;</th>
                          </tr>
                        </thead>
                        <tbody>
                         
                          <tr>
                            <td><?php echo htmlspecialchars( $value["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td>
                              <a href="/admin/users/<?php echo htmlspecialchars( $value["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-sm" style="margin-bottom: 5px;"><i class="fa fa-edit"></i> Editar</a>
                              <a href="/admin/users/<?php echo htmlspecialchars( $value["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir este registro <?php echo htmlspecialchars( $value["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Excluir</a>
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
            </div>
          </div>
    </section>
    <!-- /.content -->
  </div>