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
            <section>
                <div class="container-fluid">
                    <h3 class="page-header text-uppercase">listado de usuario</h3>
                </div>
                <div class="container-fluid">
                    <table class="table table-hover">
                        <thead>
                            <tr class="negrita">
                                <th>No</th>
                                <th>NOMBRE USUARIO</th>
                                <th>CORREO</th>
                                <th>ESTADO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (datosVista('usuario') as $usuario): ?>
                                <tr>
                                    <td><?= $usuario['id_usuario'] ?></td>
                                    <td><?= $usuario['nombre'] ?></td>
                                    <td><?= $usuario['correo'] ?></td>
                                    <td><?= $usuario['estado'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
        <script src="vistas/bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="vistas/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>