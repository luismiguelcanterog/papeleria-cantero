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
        <link href="vistas/bootstrap/css/principal.css" rel="stylesheet" type="text/css"/>
        <link href="vistas/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <style type="text/css">
            #volver{
                position: absolute;
                right: 15px;
                top: 15px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <a href="<?= urlBase() ?>" id="volver" class="btn btn-primary">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                VOLVER
            </a>
            <section id="dg-container" class="container padre">
                <div class="container-fluid">
                    <h3 class="page-header text-uppercase">agregar usuario</h3>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form role="form" method="POST" action="<?= urlBase('usuario.crear') ?>">
                            <div class="form-group col-md-12">
                                <label for="" class="text-uppercase">nombre del usuario</label>
                                <input type="text" name="nombre" class="form-control" id="" placeholder="Nombre Producto" required/>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="text-uppercase">correo del usuario</label>
                                <input type="email" name="correo" class="form-control" placeholder="usuario@gmail.com" required/>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="text-uppercase">contraseña</label>
                                <input type="password" name="contraseña" class="form-control" id="" placeholder="" required/>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Añadir usuario</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <script src="vistas/bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="vistas/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>