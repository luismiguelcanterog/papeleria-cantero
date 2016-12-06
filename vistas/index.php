<!DOCTYPE HTML>
<html>
    <head>
        <title>API</title>
        <meta charset="utf-8" />
        <base href="<?= urlBase() ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="vistas/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="vistas/css/main.css" />
        <link rel="stylesheet" href="vistas/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="vistas/bootstrap/css/plugins/morris.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="vistas/css/ie8.css" /><![endif]-->
    </head>
    <body>

        <!-- Content -->
        <div id="content">
            <div class="inner">
                <!-- Post -->
                <article class="box post post-excerpt">
                    <header>
                        <h2><a href="#">Catálogo de medicamentos</a></h2>
                        <p>Representación gráfica suministrados por API: <a href="https://www.datos.gov.co/resource/wqeu-3uhz.json">https://www.datos.gov.co/resource/wqeu-3uhz.json</a></p>
                    </header>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading text-uppercase negrita"> Grafica de medicamento</div>
                                <div class="panel-body">
                                    <div id="barra"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-primary ">
                                <div class="panel-heading text-uppercase negrita"> Grafica de medicamento</div>
                                <div class="panel-body">
                                    <div id="torta"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>
                        <strong>  Base de datos suministradada de:<a href="https://www.datos.gov.co/Salud-y-Protecci-n-Social/C-DIGO-NICO-DE-MEDICAMENTOS-VIGENTES/i7cb-raxc">https://www.datos.gov.co/Salud-y-Protecci-n-Social/C-DIGO-NICO-DE-MEDICAMENTOS-VIGENTES/i7cb-raxc</a></strong>
                    </p>
                </article>

                <article class="box post post-excerpt">
                    <header style="margin-bottom: 3em;">
                        <h3>MI API</h3>
                        <p>Lista de medicamentos</p>
                    </header>
                    <div class="container-fluid">
                        <div class="well">
                            <h4><a href="http://papeleria.nekoos.com/?funcion=medicamento.exportar">http://papeleria.nekoos.com/?funcion=medicamento.exportar</a></h4>
                        </div>
                    </div>
                    <br><br>
                </article>

                <article class="box post post-excerpt">
                    <header style="margin-bottom: 3em;">
                        <h3>TU API</h3>
                        <p>Lista y grafica tu API</p>
                    </header>
                    <div class="container-fluid">
                        <form action="<?= urlBase('medicamento.apiDinamica') ?>" method="post">
                            <div class="form-group col-md-10">
                                <input type="text" class="form-control" placeholder="Digitatu API, Ejemplo: htttp://www.ejemplo.com/tuapi/..." name="url-api" required />
                            </div>
                            <button class="btn btn-primary col-md-2 negrita">Acceder</button>
                        </form>
                    </div>

                </article>

                <article class="box post post-excerpt">
                    <header style="margin-bottom: 3em;">
                        <h3 class="text-uppercase">login</h3>
                        <p>Iniciar sesión</p>
                    </header>
                    <div class="row">
                        <div class="col-md-12" style="padding-top: 15px;">
                            <div class="panel panel-primary ">
                                <div class="panel-body">
                                    <form action="<?= urlBase('sesion.iniciar') ?>" method="post">
                                        <div class="container-fluid">
                                            <div class="form-group">
                                                <label class="text-uppercase">correo electronico</label>
                                                <input class="form-control" name="correo" type="email" />
                                            </div>
                                            <div class="form-group">
                                                <label class="text-uppercase">contraseña</label>
                                                <input class="form-control" name="contraseña" type="password" />
                                            </div>
                                            <button class="btn btn-primary negrita">Iniciar sesión</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="panel-footer panel-primary"><a href="<?= urlBase('usuario.registrar') ?>">Registrate</a></div>
                            </div>
                        </div>
                    </div>
                </article>

            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">

            <!-- Logo -->
            <h1 id="logo"><i class="fa fa-medkit fa-3x" aria-hidden="true"></i></h1>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li><a href="#"> MENÚ PRINCIPAL</a></li>
                    <li><a id="miapi" href="#">Mi API</a></li>
                    <li><a id="tuapi" href="#">Tu API</a></li>
                    <li><a id="login" href="#">LogIn</a></li>
                </ul>
            </nav>
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
        <script type="text/javascript">
            Morris.Bar({
                element: 'barra',
                data: <?= datosVista('grafica-1') ?>,
                barColors: ["#1abc9c"],
                // The name of the data record attribute that contains x-values.
                xkey: 'label',
                // A list of names of data record attributes that contain y-values.
                ykeys: ['value'],
                // Labels for the ykeys -- will be displayed when you hover over the
                // chart.
                labels: ['Value']
            });
        </script>
        <script type="text/javascript">
            Morris.Donut({
                element: 'torta',
                colors: ["#B21516", "#1531B2", "#1AB244", "#B29215"],
                data: <?= datosVista('grafica-2') ?>
            });
        </script>
        <script type="text/javascript">
            $("#login").on("click", function () {
                $("html, body").animate({
                    scrollTop: 1200
                }, 1500);
            });
        </script>
        <script type="text/javascript">
            $("#miapi").on("click", function () {
                $("html, body").animate({
                    scrollTop: 775
                }, 1500);
            });
        </script>

        <script type="text/javascript">
            $("#tuapi").on("click", function () {
                $("html, body").animate({
                    scrollTop: 1140
                }, 1500);
            });
        </script>

        <script type="text/javascript">
            $("#login").on("click", function () {
                $("html, body").animate({
                    scrollTop: 1379
                }, 2000);
            });
        </script>

        <script type="text/javascript">
            $(document).scroll(function (e) {
                var salida = $(document).scrollTop();//animated fadeInRight
                console.log(salida);
            });
        </script>
    </body>
</html>