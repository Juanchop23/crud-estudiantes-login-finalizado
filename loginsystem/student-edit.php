<?php
session_start();
require './includes/dbcon.php';

?>


<?php
include('./includes/header.php');
?>

<div class="container mt-5">

    <?php include('message.php');  ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Editar estudiante
                        <a href="dashboard.php" class="btn btn-danger float-end">Volver</a>
                    </h4>
                </div>
                <div class="card-body">

                    <!-- ====== TRAYENDO LOS REGISTROS ====== -->
                    <?php
                    if (isset($_GET['id'])) 
                    {
                        #PROTEGIENDO LA BD DE UNA INYECCIÓN SQL
                        $student_id = mysqli_real_escape_string($con, $_GET['id']);
                        $query = "SELECT * FROM students WHERE id='$student_id' ";
                        $query_run = mysqli_query($con, $query);

                        #CHEQUEANDO SI EL REGISTRO EXISTE
                        if (mysqli_num_rows($query_run) > 0) 
                        {
                            $student = mysqli_fetch_array($query_run);
                            ?>

                            <!-- ======= FORMULARIO ACTUALIZAR ESTUDIANTE ====== -->
                            <form action="code.php" method="POST">

                                <input type="hidden" name="student_id" value="<?= $student['id']; ?>">

                                <div class="mb-3">
                                    <label>Nombre del estudiante</label>
                                    <input type="text" name="name" value="<?= $student['name']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Correo del estudiante</label>
                                    <input type="text" name="email" value="<?= $student['email']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Número de contacto</label>
                                    <input type="text" name="phone" value="<?= $student['phone']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Grado</label>
                                    <input type="text" name="course" value="<?= $student['course']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <button type="submit" name="update_student" class="btn btn-primary">
                                        Actualizar estudiante
                                    </button>
                                </div>

                            </form>

                    <?php
                        } 
                        else
                        {
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
include('./includes/footer.php');
?>