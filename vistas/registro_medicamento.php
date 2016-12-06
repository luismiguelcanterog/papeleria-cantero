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


    </head>
    <body>
        <div class="container">
            <section id="dg-container" class="container padre">
                <div class="container-fluid">
                    <h3 class="page-header text-uppercase">agregar medicamento</h3>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form role="form" method="POST" action="<?= urlBase('medicamento.crear') ?>">
                            <div class="form-group col-md-9">
                                <label for="" class="text-uppercase">nombre del medicamento</label>
                                <input type="text" name="nombre" class="form-control" id="" placeholder="Nombre Producto" required/>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="" class="text-uppercase">precio del medicamento</label>
                                <input type="number" min="0" name="precio" class="form-control" placeholder="$" required/>
                            </div>
                            <div class="form-group col-md-9">
                                <label for="" class="text-uppercase">detalle del medicamento</label>
                                <input type="text" name="detalle" class="form-control" id="" placeholder="" required/>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="" class="text-uppercase">atc</label>
                                <input type="number" name="atc" class="form-control" placeholder="" required/>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="" class="text-uppercase">registro sanitario</label>
                                <input type="text" class="form-control" placeholder="" required/>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Adjuntar imagen del producto</label>
                                <input type="file" name="registro_sanitario" id="ejemplo_archivo_1">
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Añadir Medicamento</button>
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