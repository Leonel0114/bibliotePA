<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Glosario</title>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="css/materialize.min.css">
  <!-- Mis estilos -->
  <link rel="stylesheet" href="css/index.css">

  <!-- Libreria de animacion -->
  <link rel="stylesheet" href="css/animate.css">
  <link rel="icon" href="img/logo.png">
  <script src="js/jquery.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/scripts.js"></script>

</head>




<body>
  <nav class="transparent z-depth-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo grey-text text-darken-2">
      <img src="img/one.png" alt="" class="logo">
      </a>

      <ul class="right hide-on-med-and-down">
        <li>
          <a class="grey-text text-darken-2" href="Agregar.php">Agregar Libros</a>
        </li>
      </ul>

     <ul id="nav-mobile" class="sidenav user-view">
      <div class="background">
        <img src="img/naas.jpg">
      </div>

          <li><div class="divider"></div></li>

        <li>
          <a href="Agregar.php">Agregar libros</a>
        </li>
        <li>
          <a href="index.php">Pagina Princial</a>
        </li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger">
        <i class="material-icons">menu</i>
      </a>
    </div>
  </nav>





<br>

  <nav class="container" >
    <div class="nav-wrapper">
      <form>
        <div class="input-field cyan darken-2">
          <input id="search" type="search" onkeypress="return runScript(event);" required>
          <label class="label-icon" for="search">
            <i class="material-icons ">search</i>
          </label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>



<br>

<div class="container row">


  <div class="card small  col s6 ">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="img/ca.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Casa Amiga<i class="material-icons right">more_vert</i></span>
      <p class="tab "><a class="active"  href="ca.php">Libros</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Casa Amiga<i class="material-icons right">close</i></span>
      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugiat error voluptatibus veritatis quas! </p>
    </div>
  </div>


  <div class="card small  col s6 ">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="img/cerro.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Cerro de Ortega<i class="material-icons right">more_vert</i></span>
      <p><a href="ca.php">Libros</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Cerro de Ortega<i class="material-icons right">close</i></span>
      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugiat error voluptatibus veritatis quas! </p>
    </div>
  </div>
</div>
<div class="container row">

  <div class="card small  col s6 ">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="img/suchi.JPG">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Suchitlan<i class="material-icons right">more_vert</i></span>
      <p><a href="ca.php">Libros</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Suchitlan<i class="material-icons right">close</i></span>
      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugiat error voluptatibus veritatis quas! </p>
    </div>
  </div>



  <div class="card small  col s6 ">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="img/quese.JPG">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Queseria<i class="material-icons right">more_vert</i></span>
      <p><a href="ca.php">Libros</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Queseria<i class="material-icons right">close</i></span>
      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugiat error voluptatibus veritatis quas! </p>
    </div>
  </div>
</div>

<!-- 
Ultiam de cofradia -->

<div class="container row">
    <div class="card small  col s12 ">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/cofra.JPG">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Cofradia de Suchitlan<i class="material-icons right">more_vert</i></span>
          <p><a href="ca.php">Libros</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Cofradia de Suchitlan<i class="material-icons right">close</i></span>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugiat error voluptatibus veritatis quas! </p>
        </div>
      </div>

</div>


  
  <!-- div que se rellena mediante javascript, con los datos sacados de php -->
  <div class="container">
  <div id="cards" class="row wide nomar">

</div>

  </div>
  
  <br>

  <!-- Libreria JQuery -->
  <script src="js/jquery.js">  </script>

  <!-- Scripts de Materialize -->
  <script src="js/materialize.min.js"></script>
  <!-- Mis Scripts -->
  <script src="js/scripts.js"></script>

</body>


<script src="js/init.js"></script>

</html>