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
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Formulario</title>
</head>

<body>
    <form action="" class="registro">
        <h3 class="titulo">Registra tus datos</h3>

        <label for="nombre" class="labels">
            Nombre:
            <input type="text" name="nombre" id="nombre" class="inputs" placeholder="Nombre" required autofocus>
        </label>

        <label for="apellido" class="labels">
            Apellidos:
            <input type="text" name="apellido" id="apellido" class="inputs" placeholder="apellidos" required>
        </label>

        <label for="edad" class="labels">
            Edad:
            <input type="text" name="edad" id="edad" class="inputs" placeholder="edad" required>
        </label>
        <label for="speciality">Especialidad</label>
        <select name="speciality" id="speciality">
            <option disabled>Selecciona una opción</option>
            <option value="TP">Técnico en programación</option>
            <option value="TPV">Técnico en prendas de vestir</option>
            <option value="TMI">Técnico en matenimineto</option>
        </select>

        <label for="input-radio" class="labels">
            Género:
            <div class="input-radio">
                <label for="M">Masculino</label>
                <input type="radio" id="M" name="genero" id="genero" value="M">
                <label for="F">Femenino</label>
                <input type="radio" id="F" name="genero" id="genero" value="F">
            </div>
        </label>

        <label for="input-checkbox" class="labels">
            Hobbies:
            <div class="input-checkbox">

                <label for="deporte">Deporte</label>
                <input type="checkbox" name="hobby" id="deporte" value="deporte">
                <label for="musica">Musica</label>
                <input type="checkbox" name="hobby" id="musica" value="musica">
                <label for="videojuegos">Videojuegos</label>
                <input type="checkbox" name="hobby" id="videojuegos" value="videojuegos">
                <label for="correr">Correr</label>
                <input type="checkbox" name="hobby" id="correr" value="correr">
                <label for="leer">Leer</label>
                <input type="checkbox" name="hobby" id="leer" value="leer">
                <label for="dormir">Dormir</label>
                <input type="checkbox" name="hobby" id="dormir" value="dormir">
            </div>
        </label>

        <button type="submit">Enviar</button>
    </form>



    <script src="js/main.js"></script>
</body>

</html>