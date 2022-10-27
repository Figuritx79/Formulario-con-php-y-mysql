<?php
error_reporting(0);

if (isset($_POST['register'])) {
  if (strlen($_POST['clave']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['edad']) >= 1 && strlen($_POST['carrera']) >= 1 && strlen($_POST['genero']) >= 1) {
    include('connection/connec.php');
    $clave = $_POST['clave'];
    $nombres =$_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $edad =$_POST['edad'];
    $genero = $_POST['genero'];
    $especialidad =$_POST['carrera'];
    $pasatiempo = $_POST['hobby'];
    
    $pas ="";
    for ($i = 0; $i < count($pasatiempo); $i++) {
      $pas = $pas . $pasatiempo[$i] . "-";
    }
    $pas = substr($pas, 0, strlen($pas) - 1);
    $consulta = "INSERT INTO registros(clave, nombres, apellidos, edad, especialidad, genero, hobby) VALUES ('$clave','$nombres','$apellidos','$edad','$especialidad','$genero','$pas'))";
    $resultado = mysqli_query($con, $consulta);
   
  } 
}
?>