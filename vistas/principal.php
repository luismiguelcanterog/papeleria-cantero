<?php $usuario = datosVista('usuario') ?>
<!DOCTYPE html>
<html lang="en">
   <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <base href="<?= urlBase() ?>" />

      <title>Desarrollo Económico</title>

      <!--==================================-->

      <!-- Bootstrap Core CSS -->
      <link href="vistas/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>


      <!--Custom CSS-->
      <link href="vistas/bootstrap/css/sb-admin.css" rel="stylesheet"/>

      <!--Custom Fonts-->
      <!--<link href="fonts/" rel="stylesheet" type="text/css"/>-->
      <link href="vistas/bootstrap/css/principal.css" rel="stylesheet" type="text/css"/>
      <link href="vistas/bootstrap/css/estilos.css" rel="stylesheet" type="text/css"/>
      <link href="vistas/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>


   </head>
   <body>

      <div id="wrapper">

         <!-- Navigation -->
         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" > Gestión admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                  <ul class="dropdown-menu alert-dropdown">
                     <li>
                        <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                     </li>
                     <li>
                        <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                     </li>
                     <li>
                        <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                     </li>
                     <li class="divider"></li>
                     <li>
                        <a href="#">View All</a>
                     </li>
                  </ul>
               </li>
               <!--usuario-->
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user text-capitalize"></i> <?= $usuario['nombre'] ?> <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i>Perfil</a>
                     </li>
                     <!--
                     <li>
                         <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                     </li>
                     -->
                     <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i> Configuracion</a>
                     </li>
                     <li class="divider"></li>
                     <li>
                        <a href="<?= urlBase('sesion.cerrar') ?>"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesion</a>
                     </li>
                  </ul>
               </li>
            </ul>
            <!--barra lateral de menu-->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
               <ul class="nav navbar-nav side-nav">
                  <li>
                     <a href="<?= urlBase('medicamento.listar') ?>" target="cargar"><i class="fa fa-fw fa-list-alt "></i> Catalogo Medicamentos</a>
                  </li>
                  <li>
                     <a href="<?= urlBase('medicamento.api') ?>" target="cargar"><i class="fa fa-fw fa-list-ol"></i>Api medicamentos</a>
                  </li>
                  <?php if ($usuario['rol'] == 'administrador'): ?>
                      <li>
                         <a href="<?= urlBase('medicamento.registrar') ?>" target="cargar"><i class="fa fa-fw fa-list-ol"></i>Añadir Medicamento</a>
                      </li>
                      <li>
                         <a href="<?= urlBase('usuario.registrar') ?>" target="cargar"><i class="fa fa-fw fa-bar-chart-o"></i> Añadir Usuario</a>
                      </li>
                      <li>
                         <a href="<?= urlBase('usuario.listar') ?>" target="cargar"><i class="fa fa-fw fa-bar-chart-o"></i> Listar Usuario</a>
                      </li>
                  <?php endif; ?>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </nav>

         <div id="page-wrapper">
            <iframe name="cargar" src="<?= urlBase('medicamento.listar') ?>" class="lienzo" frameborder="0" >

            </iframe>

            <!--importar vistas-->

         </div>
         <!-- /.container-fluid -->

      </div>
      <!-- /#page-wrapper -->

   </div>
   <!-- /#wrapper -->

   <!-- jQuery -->
   <script src="vistas/bootstrap/js/jquery.js"></script>
   <script type="text/javascript" src="vistas/bootstrap/js/bootstrap.min.js"></script>

   <script type="text/javascript">
       $(function () {
           $('[data-toggle="tooltip"]').tooltip()
       })
   </script>

   <script type="text/javascript">


   </script>
</body>

</html>
