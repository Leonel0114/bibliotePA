<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Glosario</title>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
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
  <nav class="transparent z-depth-3 " role="navigation">
    <div class="nav-wrapper container ">
      <a href="index.php" class="brand-logo">
        <img src="img/one.png" alt="" class="logo">
      </a>
      <ul class="right hide-on-med-and-down">
        <li>
          <a href="Agregar.php" class=" flow-text  black-text ">Agregar libros</a>
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
          <a href="Agregar.php">Agregar libros</a>
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
    </div>
  </nav>





  <br>

  <nav class="container">
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
  <script>
    var datoInput = $('#search').val();
    $.ajax({
      data: {
        "datoInput": datoInput
      },
      url: "controllers/dross.php",
      type: "post",
      success: function (response) {
        alert(response);
      }
    });
  </script>


  <br>

  <div class="container row">


    <div class="card small  col s6 pado">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="img/ca.jpg">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">
          <h5>Casa Amiga</h5><i class="material-icons right">more_vert</i>
        </span>
        <p class="tab "><a class="active" href="ca.php">Libros</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">
          <h3>Casa Amiga</h3><i class="material-icons right">close</i>
        </span>
        <p class="flow-text"> Pocas veces he visto que negreen tanto a personas, ta buena onda como en este lugar.
          Triste realidad, #saveLAN </p>
      </div>
    </div>


    <div class="card small  col s6 pado">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="img/cdo.jpg">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4 flow-text">
          <h5>Cerro de Ortega</h5><i class="material-icons right">more_vert</i>
        </span>
        <p><a href="cdo.php">Libros</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4 flow-text">
          <h3>Cerro de Ortega</h3><i class="material-icons right">close</i>
        </span>
        <p class="flow-text"> El Centro educativo Grow, ubicado en la parte sur del estado, es el mejor club de tareas
          de todo PA.

        </p>
      </div>
    </div>
  </div>
  <div class="container row">

    <div class="card small  col s6 ">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="img/suchi.JPG">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">
          <h5>Suchitlan</h5><i class="material-icons right">more_vert</i>
        </span>
        <p><a href="suchi.php">Libros</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">
          <h3>Suchitlan</h3><i class="material-icons right">close</i>
        </span>
        <p class="flow-text"> Hay cosas raras, llenas de nawuales y despues esta suchi, tan inestable como yo en el
          semestre. pero con un gran corazon, como yo los domingos.</p>
      </div>
    </div>



    <div class="card small  col s6  ">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="img/quese.JPG">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">
          <h5>Queseria</h5><i class="material-icons right">more_vert</i>
        </span>
        <p><a href="queseria.php">Libros</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">
          <h3>Queseria</h3><i class="material-icons right">close</i>
        </span>
        <p class="flow-text"> Tiene club de tareas en queseria?? LOL
          #YadejalaKchs </p>
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
        <span class="card-title activator grey-text text-darken-4">
          <h5>Cofradia de Suchitlan</h5><i class="material-icons right">more_vert</i>
        </span>
        <p><a href="cofra.php">Libros</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">
          <h3>Cofradia de Suchitlan</h3><i class="material-icons right">close</i>
        </span>
        <p class="flow-text"> Hay cosas bonitas, y despues viene el club de tareas de cofrayork, 10 de 10. Legal
          #Legalizenalasde14
        </p>
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
  <script src="js/jquery.js"> </script>

  <!-- Scripts de Materialize -->
  <script src="js/materialize.min.js"></script>
  <!-- Mis Scripts -->
  <script src="js/scripts.js"></script>
  <script src="js/init.js"></script>

</body>




</html>