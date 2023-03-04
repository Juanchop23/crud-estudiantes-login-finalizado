<?php
require './includes/dbcon.php';

?>


<?php 
include ('./includes/header.php');
?>



    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalles del estudiante
                            <a href="dashboard.php" class="btn btn-danger float-end">Volver</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            #PROTEGIENDO LA BD DE UNA INYECCIÓN SQL
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM students WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            #CHEQUEANDO SI EL REGISTRO EXISTE
                            if (mysqli_num_rows($query_run) > 0) {
                                $student = mysqli_fetch_array($query_run);
                        ?>

                                <!-- ======= FORMULARIO ACTUALIZAR ESTUDIANTE ====== -->

                                    <div class="mb-3">
                                        <label>Nombre completo del estudiante</label>
                                        <p class="form-control">
                                            <?= $student['name']; ?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>Correo del estudiante</label>
                                        <p class="form-control">
                                            <?= $student['email']; ?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>Número de contacto</label>
                                        <p class="form-control">
                                            <?= $student['phone']; ?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>Grado</label>
                                        <p class="form-control">
                                            <?= $student['course']; ?>
                                        </p>
                                    </div>

                        <?php
                            } else {
                                echo "<h4>No se encontró al estudiante</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php 
include ('./includes/footer.php');
?>