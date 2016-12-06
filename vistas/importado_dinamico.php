<?php
$objetos = datosVista('objeto');
if (count($objetos)) {
    $titulos = array_keys((array) $objetos[0]);
}
?>
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
        <link rel="stylesheet" href="vistas/css/main.css" />
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
            <article class="box post post-excerpt">
                <header style="margin-bottom: 3em;">
                    <h2>Visualización de API sumninistrada</h2>
                    <p>Selecciona la columna a graficar</p>
                </header>
                <div class="container">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Grafica por columna</div>
                        <div class="panel-body"  style="padding: 30px;">
                            <form action="<?= urlBase('medicamento.apiDinamica', ['tipo=grafica']) ?>" method="post" target="marco-grafica">
                                <input type="text" class="hidden" name="url-api" value="<?= datosVista('url-api') ?>">
                                <div class="form-group col-md-9">
                                    <select name="columna" id="columna" class="form-control col-md-9">
                                        <?php foreach ($titulos as $titulo): ?>
                                            <option><?= $titulo ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <button class="btn btn-primary col-md-3">Graficar</button>
                            </form>
                        </div>
                    </div>

                    <div class="container-fluid" style="padding: 0px 5px 0px 5px">
                        <iframe name="marco-grafica" id="marco-grafica" frameborder="0" style="background: #eee; width: 100%; height: 450px;"></iframe>
                    </div>

                    <div class="container-fluid">

                        <header style="margin-bottom: 3em;">
                            <p>Listado de la Api suministrada</p>
                        </header>
                        <div class="table table-responsive">
                            <table class="table table-hover table-responsive">
                                <thead>
                                    <tr class="negrita">
                                        <?php foreach ($titulos as $titulo): ?>
                                            <th><?= $titulo ?></th>
                                        <?php endforeach; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($objetos as $objeto): ?>
                                        <tr>
                                            <?php foreach ($titulos as $titulo): ?>
                                                <td><?= $objeto->$titulo ?></td>
                                            <?php endforeach; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br /><br />

            </article>
        </div>

        <script src="vistas/js/util.js"></script>
        <script src="vistas/bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="vistas/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>