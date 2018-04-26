<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/css/materialize.min.css">

    <!-- Mis estilos -->
    <link rel="stylesheet" href="css/index.css">

    <!-- Libreria de animacion -->
    <link rel="stylesheet" href="css/animate.css">
</head>

</head>
<nav class="blue-grey darken-4">
        <div class="nav-wrapper container">
            <a href="index.php" class="brand-logo"> BibliotePA</a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li>
                    <a href="Login.php">Glosario</a>
                </li>
                <li>
                    <a href="Buscar.php">Buscar Libros</a>
                </li>
            </ul>
        </div>
    
<body class="container gray lighten-2">
    <div class="row">
        <h1 class="title col s12" style="color:chocolate;">Mostrando Datos</h1>
    </div>

    <div class="row">
        <div class="input-field col s4">
            <button type='submit' class="btn waves-effect waves-light" onclick="getData()">Obtener data</button>
        </div>
    </div>
    <br>

    <!-- div que se rellena mediante javascript, con los datos sacados de php -->
    <div id="cards" class="row">
        <a href="http://facebook.com/0114Leonel" style="text-derocation: nule;" target="_blank">Hola Mundo! </a>
    </div>
    <br>

    <!-- Libreria JQuery -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

    <!-- Scripts de Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/js/materialize.min.js"></script>

    <!-- Mis Scripts -->
    <script src="js/sctips.js"></script>

</body>

    

</html>