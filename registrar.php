<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro exitoso</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/registro.css">
  <link rel="shortcut icon" href="img/like.ico" type="image/x-icon">
</head>

<body>
  <?php
  error_reporting(0);
  if (isset($_POST['register'])) {
    if (strlen($_POST['clave']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['edad']) >= 1 && strlen($_POST['genero']) >= 1 && strlen($_POST['carrera']) >= 1) {
      include("connection/connec.php");
      $clave = $_POST['clave'];
      $nombres = $_POST['nombre'];
      $apellidos = $_POST['apellido'];
      $edad = $_POST['edad'];
      $genero = $_POST['genero'];
      $especialidad = $_POST['carrera'];
      $pasatiempo = $_POST['hobby'];
      $pas = "";
      for ($i = 0; $i < count($pasatiempo); $i++) {
        $pas = $pas . $pasatiempo[$i] . "-";
      }
      $pas = substr($pas, 0, strlen($pas) - 1);
      $sql = "INSERT INTO registros(clave, nombres, apellidos, edad, especialidad, genero, hobby) VALUES ('$clave','$nombres','$apellidos','$edad','$especialidad','$genero','$pas')";
      if (mysqli_query($con, $sql)) {
  ?>
        <h3 class="okey">Registro exitoso</h3>
  <?php
      }
    }
  }

  ?>
     <a href="index.php">
          <img src="img/back.svg" alt="like" class="like">
      </a>
</body>

</html>