<!DOCTYPE HTML>
<html>
    <head>
        <title>Striped by HTML5 UP</title>
        <meta charset="utf-8" />
        <base href="<?= urlBase() ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="vistas/css/main.css" />
        <link rel="stylesheet" href="vistas/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="vistas/bootstrap/css/plugins/morris.css" />


    </head>
    <body>

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-uppercase negrita"> Grafico de barras</div>
                        <div class="panel-body">
                            <div id="barra"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-primary ">
                        <div class="panel-heading text-uppercase negrita"> Grafico de torta</div>
                        <div class="panel-body">
                            <div id="torta"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <script src="vistas/js/jquery.min.js"></script>
        <!--<script src="vistas/js/skel.min.js"></script>-->
        <script src="vistas/js/util.js"></script>
        <script src="vistas/bootstrap/js/bootstrap.min.js"></script>
        <script src="vistas/bootstrap/js/plugins/morris/morris.min.js"></script>
        <script src="vistas/bootstrap/js/plugins/morris/raphael.min.js"></script>
        <!--[if lte IE 8]><script src="vistas/js/ie/respond.min.js"></script><![endif]-->
        <script src="vistas/js/main.js"></script>
        <script type="text/javascript">
            Morris.Donut({
                element: 'torta',
                data: <?= datosVista('grafica-x') ?>
            });
        </script>
        <script type="text/javascript">
            Morris.Bar({
                element: 'barra',
                data: <?= datosVista('grafica-x') ?>,
                xkey: 'label',
                ykeys: ['value'],
                labels: ['Cantidad']
            });
        </script>
    </body>
</html>