<?php
session_start();

?>


<?php 
include ('./includes/header.php');
?>

    <div class="container mt-5">

        <?php include('message.php');  ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Añadir estudiante
                            <a href="dashboard.php" class="btn btn-danger float-end">Volver</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Nombre del estudiante</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Correo del estudiante</label>
                                <input type="text" name="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Número de contacto</label>
                                <input type="text" name="phone" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Grado</label>
                                <input type="text" name="course" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Guardar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php 
include ('./includes/footer.php');
?>