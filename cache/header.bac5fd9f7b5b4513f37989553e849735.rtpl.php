<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Produtora | Painel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Customize Style -->
  <link rel="stylesheet" href="../../res/admin/dist/css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../res/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../res/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../res/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../res/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../res/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../res/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../res/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../res/admin/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <!--ANTES: <nav class="main-header navbar navbar-expand navbar-white navbar-light"> -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-danger">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Site</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contato</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Pesquisar" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-warning navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../res/admin/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 horas atrás</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../res/admin/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 horas atrás</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../res/admin/dist/img/lucas-160x160.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 horas atrás</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Veja todas as mensagens</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown user user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> 
          <img src="<?php echo htmlspecialchars( $user["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="user-image img-circle elevation-2" alt="User Image"> 
          <span class="d-none d-md-block float-right" style="margin-left: 5px;"><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span> </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-danger">
            <img src="<?php echo htmlspecialchars( $user["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="img-circle elevation-2" alt="User Image">
    
            <p>
              <?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
              <small><?php echo htmlspecialchars( $user["desfunction"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
              <a href="/admin/profile" class="btn btn-outline-danger">Perfil</a>
              <a href="/admin/logout" class="btn btn-outline-danger float-right">Sair</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <!--ANTES: <aside class="main-sidebar sidebar-dark-primary elevation-4"> --> 
  <aside class="main-sidebar elevation-4 sidebar-light-danger">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="../../res/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Connect Films</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo htmlspecialchars( $user["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admin/profile" class="d-block"><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li id="painel" class="nav-item">
            <a href="/admin" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p style="margin-left: 8px;">
                Painel
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-close">
              <a href="#" class="nav-link">
                  <i class="fas fa-thumbtack" style="margin-left: 4px; transform: rotate(45deg);"></i>
                <p style="margin-left: 20px;">
                  Posts
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/admin/posts" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Todos os posts</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/new-post" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Adicionar novo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                      <a href="/admin/categories" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Categorias</p>
                      </a>
                    </li>
              </ul>
            </li>
          <li class="nav-item">
            <a href="/admin/midia" class="nav-link">
              <i class="fas fa-photo-video" style="margin-left:4px;"></i>
              <p style="margin-left: 12px;">
                Mídia
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/email" class="nav-link">
              <i class="fas far fa-envelope" style="margin-left: 4px;"></i>
              <p style="margin-left: 15px;">
                Email
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/servicos" class="nav-link">
              <i class="fas far fa-wrench" style="margin-left: 4px;"></i>
              <p style="margin-left: 15px;">
                Serviços
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
                <i class="fas fa-folder-open" style="margin-left: 4px;"></i>
              <p style="margin-left: 12px;">
                Portifolio
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/portifolio" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Todos os portifolios</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="/admin/portifolio/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Adicionar novo</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/categories" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Categorias</p>
                    </a>
                  </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/admin/orcamentos" class="nav-link">
              <i class="fas fa-dollar-sign" style="margin-left: 4px;"></i>
              <p style="margin-left: 22px;">
                Orçamentos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/team" class="nav-link">
              <i class="fas fa-user-friends" style="margin-right: -8px;"></i>
              <p style="margin-left: 22px;">
                Time
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/users" class="nav-link" id="usuarios">
              <i class="fas far fa-user" style="margin-left: 4px;"></i>
              <p style="margin-left: 18px;">
               Usuários
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
