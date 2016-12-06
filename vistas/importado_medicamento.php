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
            <article class="box post post-excerpt">
                <header style="margin-bottom: 3em;">
                    <h2><a href="#">Previsualizar medicamentos</a></h2>
                    <p>Listado de medicamentos suministrados por https://www.datos.gov.co/</p>
                </header>
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                            <tr class="negrita">
                                <th>ID</th>
                                <th>PRODUCTO</th>
                                <th>ATC</th>
                                <th>ESTADO CUM</th>
                                <th>TIPO ROL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (datosVista('objeto') as $i => $objeto): ?>
                                <tr>
                                    <td><?= $objeto->consecutivocum ?></td>
                                    <td><?= $objeto->producto ?></td>
                                    <td><?= $objeto->atc ?></td>
                                    <td><?= $objeto->estadocum ?></td>
                                    <td><?= $objeto->tiporol ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <br /><br />
                <p>
                    <strong>  Base de datos suministradada de:<a href="https://www.datos.gov.co/Salud-y-Protecci-n-Social/C-DIGO-NICO-DE-MEDICAMENTOS-VIGENTES/i7cb-raxc">https://www.datos.gov.co/Salud-y-Protecci-n-Social/C-DIGO-NICO-DE-MEDICAMENTOS-VIGENTES/i7cb-raxc</a></strong>
                </p>
            </article>
        </div>
        <script src="vistas/bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="vistas/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>