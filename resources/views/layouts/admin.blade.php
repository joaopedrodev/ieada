<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Área do Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="/adminlte/plugins/fullcalendar/main.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Pagina inicial IEADA</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Procurar" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img class="img-circle elevation-2" alt="User Image" src="{{Auth::user()->profile_photo_url}}" alt="{{Auth::user()->name}}" />
        </div>
        <div class="info">
          @if (Route::has('login'))
					
          @auth
          <a href="#" class="d-block">{{substr(auth()->user()->name, 0,25)}}</a>
          @endauth
        @endif
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Procurar" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" data-accordion="false">
              <li class="nav-item">
                <a href="/admin/sermoes" class="nav-link">
                  <i class="fa fa-comments"></i>
                  <p>Sermões</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/mensagens" class="nav-link">
                  <i class="fa fa-book" aria-hidden="true"></i>
                  <p>Mensagem Bíblica</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/events/" class="nav-link">
                  <i class="fa fa-calendar"></i>
                  <p>Eventos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/contato" class="nav-link">
                  <i class="fa fa-comments"></i>
                  <p>Fale Conosco </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/cadastros" class="nav-link">
                  <i class="fa fa-users" aria-hidden="true"></i>
                  <p>Cadastro de membros</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/obreiros/" class="nav-link">
                  <i class="fa fa-users" aria-hidden="true"></i>
                  <p>Cadastro de Obreiros</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/pastores/" class="nav-link">
                  <i class="fa fa-male" aria-hidden="true"></i>
                  <p>Bio do Pastor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/igrejas/" class="nav-link">
                  <i class="fa fa-home" aria-hidden="true"></i>
                  <p>Bio da Igreja</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="/admin/atas/" class="nav-link">
                  <i class="fa fa-book" aria-hidden="true"></i>
                  <p>Livro ata de reunião</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="/admin/users/" class="nav-link">
                  <i class="fa fa-users" aria-hidden="true"></i>
                  <p>Usuários</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/galfas/" class="nav-link">
                  <i class="fa fa-users" aria-hidden="true"></i>
                  <p>Grupo Alfa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/louvor/" class="nav-link">
                  <i class="fa fa-users" aria-hidden="true"></i>
                  <p>Sublime Louvor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/adolescentes/" class="nav-link">
                  <i class="fa fa-users" aria-hidden="true"></i>
                  <p>Geração Eleita</p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="/admin/departamento/" class="nav-link">
                  <i class="fa fa-users" aria-hidden="true"></i>
                  <p>Departamento de Louvor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/escola/" class="nav-link">
                  <i class="fa fa-users" aria-hidden="true"></i>
                  <p>Escola Bíblica</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/primicias" class="nav-link">
                  <i class="fa fa-users" aria-hidden="true"></i>
                  <p>Primícias</p>
                </a>
              </li>
              
              
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>IEADA GIRASSOL</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">ADMINISTRATIVO</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
  

 