<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" href="css/fonts.css">
  <title>BibliotecaPA</title>
  <link rel="icon" href="img/logo.png">
  <script src="js/jquery.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/scripts.js"></script>


</head>

<body>
  <nav class="blue-grey darken-4"> 
    <div class="nav-wrapper container ">
      <a href="index.php" class="brand-logo">Biblioteca ProjectAmigo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li>
          <a href="Login.php">Login</a>
        </li>
        <li>
          <a href="Buscar.php">Buscar Libros</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <h1 class="blue-grey-text sams">Libros</h1>
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
          </select>
          <label>Dependencia</label>
        </div>
        <br>
        <div class="col s4"> </div>
        <a class="btn col s4 centriko" onclick="prueba()">Subir libro!</a>
        <!-- CENTERING THINGS CSS -->
        <div></div>
        <br>
      </div>
  </div>

  </form>

  </div>


  <footer class="page-footer #263238 blue-grey darken-4">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text"> Content</h5>
                    <p class="grey-text text-lighten-4"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis neque inventore soluta praesentium. Totam, dolore eum. Quas quisquam, alias nihil, recusandae officiis hic libero mollitia numquam cumque ullam quia commodi.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Contact</h5>
                    <ul>
                        <li>
                            <a class="grey-text text-lighten-3" href="https://www.facebook.com/alvarosalvador.florestirado" target="_blank">Alvaro</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="https://www.facebook.com/IsThatBoi" target="_blank">Fernando</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="https://www.facebook.com/0114Leonel" target="_blank">Leonel</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <a href="http://projectamigo.org" target="_blank">Project Amigo</a> 936 B 7th St, #168 Novato, CA 94945 info@projectamigo.org
            </div>
        </div>
    </footer>




</body>

</html>