<?php
session_start();
require './includes/dbcon.php';


#BORRANDO REGISTROS
if(isset($_POST['delete_student'])){
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM students WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    #ASEGURANDO SI SE ESTÁ EJECUTANDO O NO
    if($query_run){
        $_SESSION['message'] = "Estudiante borrado correctamente.";
        header("Location: dashboard.php");
        exit(0);
    } else{
        $_SESSION['message'] = "No se pudo borrar.";
        header("Location: dashboard.php");
        exit(0);
    }
}



#EDITANDO LOS REGISTROS
if (isset($_POST['update_student'])) 
{
    #OBTENIENDO LOS REGISTROS
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    #ACTUALIZANDO EL REGISTRO
    $query = "UPDATE students SET name='$name', email='$email', phone='$phone', course='$course' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    #CHEQUEANDO SI EL REGISTRO SE ACTUALIZÓ CORRECTAMENTE
    if($query_run){
        $_SESSION['message'] = "Estudiante actualizado correctamente.";
        header("Location: dashboard.php");
        exit(0);
    } else{
        $_SESSION['message'] = "No se pudo actualizar.";
        header("Location: dashboard.php");
        exit(0);
    }
}



#GUARDANDO EL REGISTRO DEL ESTUDIANTE
#CHEQUEANDO SI EL BOTÓN HA SIDO PRESIONADO
if (isset($_POST['save_student'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    #INSERTANDO INFO EN LA BD
    $query = "INSERT INTO students (name,email,phone,course) VALUES
        ('$name','$email','$phone','$course')";

    #EJECUTANDO LA CONEXIÓN Y ENVÍO DE INFO
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Estudiante creado";
        header("Location: student-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "No se pudo añadir al estudiante";
        header("Location: student-create.php");
        exit(0);
    }
}