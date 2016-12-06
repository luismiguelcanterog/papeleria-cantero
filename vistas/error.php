<!doctype html>
<html lang="en">
    <head>
        <title>Error</title>
        <meta charset="utf-8" />
        <meta http-equiv="Refresh" content="3;url=http://papeleria.nekoos.com/" />
        <base href="<?= urlBase() ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="vistas/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="vistas/css/main.css" />
        <link rel="stylesheet" href="vistas/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="vistas/bootstrap/css/plugins/morris.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="vistas/css/ie8.css" /><![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="well">
                <h1 class="has-warning">Ha ocurrido un error <strong><?= datosVista('tipo-error') ?></strong></h1>
                <div>
                    <?= datosVista('mensaje-error') ?>
                </div>
                <div>Esta pagina se redirigira automaticamente en 5s</div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="vistas/js/jquery.min.js"></script>
        <script src="vistas/js/skel.min.js"></script>
        <script src="vistas/js/util.js"></script>
        <script src="vistas/bootstrap/js/bootstrap.min.js"></script>
        <script src="vistas/bootstrap/js/plugins/morris/morris.min.js"></script>
        <script src="vistas/bootstrap/js/plugins/morris/raphael.min.js"></script>
        <!--[if lte IE 8]><script src="vistas/js/ie/respond.min.js"></script><![endif]-->
        <script src="vistas/js/main.js"></script>
    </body>
</html>