<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <title>BibliotecaPA</title>
  <link rel="icon" href="img/logo.png">
  <script src="js/jquery.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/scripts.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



</head>

<body>
  <nav class="transparent z-depth-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo">
      <img src="img/one.png" alt="" class="logo">
      </a>
     
   
      <ul class="right hide-on-med-and-down">
        <li>
          <a class="flow-text " href="Glosario.php">Glosario</a>
        </li>
      </ul>

     <ul id="nav-mobile" class="sidenav user-view">
        <div class="background">
          <img src="img/naas.jpg">
        </div>

        <li>
          <div class="divider"></div>
        </li>

        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="ca.php">Glosario de Libros</a>
        </li>
        <li>
          <div class="divider"></div>
        </li>
        <li>
          <a href="ca.php">Casa Amiga</a>
        </li>
        <li>
          <a href="cdo.php">Cerro de Ortega</a>
        </li>
        <li>
          <a href="cofra.php">Cofradia de Suchitlan</a>
        </li>
        <li>
          <a href="queseria.php">Queseria</a>
        </li>

        <li>
          <a href="suchi.php">Suchitlan</a>
        </li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger">
        <i class="material-icons">menu</i>
      </a>
      </a>
    </div>
  </nav>

  <div class="container">
    <h1 class="blue-grey-text ">Libros</h1>
    <blockquote>Ingrese libros a la base de datos</blockquote>
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="nombre" type="text" class="validate">
          <label for="nombre">Nombre</label>
        </div>

        <div class="input-field col s6">
          <input id="autor" type="text" class="validate">
          <label for="autor">Autor</label>
        </div>

      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="editorial" type="text" class="validate">
          <label for="editorial">Editorial</label>
        </div>

        <div class="input-field col s6">
          <input id="origen" type="text" class="validate">
          <label for="origen">Origen</label>
        </div>


        <div class="input-field col s6">
          <select id="genero">
            <option value="1" disabled selected>Elige una opcion</option>
            <option value="Lirica">Lirica</option>
            <option value="Narrativa">Narrativa</option>
            <option value="Drama">Drama</option>
            <option value="Novela">Novela</option>
            <option value="Politico">Politico</option>
            <option value="Terror">Terror</option>
            <option value="Investigacion">Investigacion</option>
            <option value="Deportes">Deportes</option>
            <option value="Infantil">Infantil</option>
            <option value="Juvenil">Juvenil</option>
          </select>
          <label>Genero</label>
        </div>

        <div class="input-field col s6">
          <select id="estado">
            <option value="1" disabled selected>Elige una opcion</option>
            <option value="Disponible">Disponible</option>
            <option value="Ocupado">Ocupado</option>
          </select>
          <label>Estado</label>
        </div>

        <div class="input-field col s12">
          <select id="dependencia">
            <option value="1" disabled selected>Elige una opcion</option>
            <option value="Casa Amiga">Casa Amiga</option>
            <option value="Cofradia de Suchitlan">Cofradia de Suchitlan</option>
            <option value="Suchitlan">Suchitlan</option>
            <option value="Cerro de Ortega">Cerro de Ortega</option>
            <option value="Queseria">Queseria</option>
          </select>
          <label>Dependencia</label>
        </div>
        <br>
        <div class="col s4"> </div>
        <a class="btn col s4 centriko cyan darken-2" onclick="prueba()">Subir libro!</a>
        <!-- CENTERING THINGS CSS -->
        <div></div>
        <br>
      </div>
  </div>

  </form>

  </div>


  



</body>
<script src="js/init.js" ></script>
</html>