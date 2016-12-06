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
      <link href="vistas/css/medicamento.css" rel="stylesheet"/>
      <link href="vistas/bootstrap/css/principal.css" rel="stylesheet" type="text/css"/>
      <link href="vistas/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>


   </head>
   <body>
      <div class="container">
         <section>
            <div class="container-fluid">
               <div class="container-fluid">
                  <h3 class="page-header text-uppercase">listado de medicamentos</h3>
               </div>
               <section id="dg-container" class="container padre">
                   <?php foreach (datosVista('medicamento') as $medicamento): ?>
                      <div class="col-md-3 col-sm-4 col-xs-12">
                         <div class="producto">
                            <img class="imagen" src="vistas/img/producto/<?= $medicamento['id_medicamento'] ?>.png" alt="" />
                            <div class="cuerpo">
                               <div class="nombre">
                                  <h5 class="negrita text-uppercase" data-nombre=""><?= $medicamento['nombre'] ?></h5>
                               </div>
                               <div class="descripcion">
                                  <h5 class="negrita text-uppercase moneda" data-precio=""><?= $medicamento['precio'] ?></h5>
                               </div>
                            </div>
                         </div>
                      </div>
                  <?php endforeach; ?>
               </section>
            </div>
         </section>
      </div>
      <script src="vistas/bootstrap/js/jquery.js"></script>
      <script type="text/javascript" src="vistas/bootstrap/js/bootstrap.min.js"></script>
   </body>
</html>