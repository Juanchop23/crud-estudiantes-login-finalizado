<?php
session_start();
include './includes/dbcon.php';

include 'config.php';

if (!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
}


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalles del estudiante
                        <a href="logout.php" class="btn btn-danger float-end">Cerrar Sesión</a>
                            <a href="student-create.php" class="btn btn-primary float-end me-2">Añadir estudiantes</a>
                        </h4>
                        <h5>Hola, <b><?php echo htmlspecialchars($_SESSION["admin_name"]); ?></b>. Ingresaste como admin a los listados.</h5>
                    </div>
                    <div class="card-body">

                        <!-- ======= TABLA CON LA INFO ====== -->
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre del estudiante</th>
                                    <th>Correo</th>
                                    <th>Teléfono</th>
                                    <th>Grado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                #TRAYENDO EL REGISTRO
                                $query = "SELECT * FROM students";
                                $query_run = mysqli_query($con, $query);

                                #CHEQUEANDO SI EL REGISTRO EXISTE
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $student) {
                                ?>
                                        <tr>
                                            <td>
                                                <?= $student['id']; ?>
                                            </td>
                                            <td>
                                                <?= $student['name']; ?>
                                            </td>
                                            <td>
                                                <?= $student['email']; ?>
                                            </td>
                                            <td>
                                                <?= $student['phone']; ?>
                                            </td>
                                            <td>
                                                <?= $student['course']; ?>
                                            </td>

                                            <!-- ==== BOTONES ==== -->
                                            <td>
                                                <!-- ==== CADA QUE NO CARGUE UNA INTERFAZ, REVISAR LAS LÍNEAS ==== -->
                                                <!-- ==== DONDE SE HAGA EL LLAMADO. EVITAR PONER SIGNOS ==== -->
                                                <!-- ==== DE IGUAL ANTES DEL ID ==== -->
                                                <a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">Ver</a>
                                                <a href="student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Editar</a>

                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_student" value="<?= $student['id']; ?>" class="btn btn-danger btn-sm">Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5>No se encontró el registro</h5>";
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ====== BOOTSTRAP ====== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>