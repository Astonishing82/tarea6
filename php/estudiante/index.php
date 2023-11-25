<?php
require_once('estudianteModel.php');
$object = new estudianteModel();
$rows = $object->listar();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/table.css">
    <link rel="stylesheet" href="../../css/index.css">
</head>

<body>
    <?php
    require_once('../navbar.php');
    ?>
    <div class="container">
        <div class="table-responsive table-table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height:700px; ">
            <section>
                <table class="table table-striped mb-0">
                    <thead style="background-color: #002d72">
                        <tr>
                            <th scope="col" class="text-white">Id</th>
                            <th scope="col" class="text-white">Nombre</th>
                            <th scope="col" class="text-white">Apellido</th>
                            <th scope="col" class="text-white">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $row) { ?>
                            <tr>
                                <td><?= $row['idEstudiante'] ?></td>
                                <td><?= $row['nombre'] ?></td>
                                <td><?= $row['apellido'] ?></td>
                                <td><a class="btn btn-info btn-lm" href="">Ver</a>
                                    <a class="btn btn-warning" href="">Editar</a>
                                    <a class="btn btn-danger" href="">Eliminar</a>

                                    <?php 
                                        include {'viewModal.php'};
                                        include {'deleteModel.php'};

                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
        </div>
        </table>
        </section>
    </div>
</body>
<script src="../../js/bootstrap.bundle.min.js"></script>

</html>