<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="formulario,trabajo escuela,php,html,css,js">
    <meta name="description" content="Formulario para trabajo de escuela">
    <meta name="author" content="Enrique González">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Formulario</title>
</head>

<body>
        <form action="" class="registro" method="post">
            <h2 class="registro-titulo">Registra tus datos</h2>

            <label for="nombre" class="registro__label">Clave:</label>
            <input type="text" name="clave" id="clave" class="registro__input" placeholder="Clave" required autofocus>


            <label for="nombre" class="registro__label">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="registro__input" placeholder="Nombre" required autofocus>

            <label for="apellido" class="registro__label">Apellidos</label>
            <input type="text" name="apellido" id="apellido" class="registro__input" placeholder="apellidos" required>

            <label for="edad" class="registro__label">Edad:</label>
            <input type="text" name="edad" id="edad" class="registro__input" placeholder="edad" required onkeypress="return valideKey(event);">

            <label for="speciality" class="registro__label">Especialidad</label>
            <select name="carrera" id="speciality" class="registro__input">
                <option selected disabled>Selecciona una opción</option>
                <option value="TP">Técnico en programación</option>
                <option value="TPV">Técnico en prendas de vestir</option>
                <option value="TMI">Técnico en matenimineto</option>
            </select>

            <label for="input-radio" class="registro__label"> Género:</label>
            <div class="input-radio">
                <input type="radio" id="M" name="genero" id="masculino" value="Masculino">
                <label for="M" class="radio__label">Masculino</label>
                <input type="radio" id="F" name="genero" id="femenino" value="Femenino">
                <label for="F" class="radio__label">Femenino</label>
            </div>

            <label for="input-checkbox" class="registro__label">Hobbies:</label>
            <div class="input-checkbox">
                <div class="checkbox-1">
                    <label for="deporte">Deporte</label>
                    <input type="checkbox" name="hobby" id="deporte" value="deporte">

                    <label for="musica">Musica</label>
                    <input type="checkbox" name="hobby" id="musica" value="musica">

                    <label for="nadar">Nadar</label>
                    <input type="checkbox" name="hobby" id="nadar" value="nadar">

                </div>
                <div class="checkbox-2">
                    <label for="correr">Correr</label>
                    <input type="checkbox" name="hobby" id="correr" value="correr">

                    <label for="leer">Leer</label>
                    <input type="checkbox" name="hobby" id="leer" value="leer">

                    <label for="dormir">Dormir</label>
                    <input type="checkbox" name="hobby" id="dormir" value="dormir">
                </div>
            </div>
            <button type="submit" name="register">Enviar</button>
        </form>
        <?php
              include('registrar.php');
        ?>



    <script src="js/main.js"></script>
</body>

</html>