<?php
include("config.php");
extract($_POST);
$sql = "INSERT INTO `contact-data`(`firstname`, `lastname`, `phone`, `email`, `messages`) VALUES ('".$firstname."','".$lastname."',".$phone.",'".$email."','".$message."')";
$result = $conn->query($sql);
if(!$result){
    die("No se pudo enviar lainformación: ".$conn->error);
}
echo "Muy pronto nos pondremos en contacto contigo";
$conn->close();
?>