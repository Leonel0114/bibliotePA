<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cerro de Ortega</title>
    <link rel="icon" href="img/logo.png">
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>
<nav class="transparent z-depth-3" role="navigation">
    <div class="nav-wrapper container">
        <a href="index.php" class="brand-logo">
            <img src="img/one.png" alt="" class="logo">
        </a>
        <ul class="right hide-on-med-and-down">
            <li>
                <a href="Agregar.php" class=" flow-text  ">Agregar libros</a>
            </li>
            <li>
                <a href="Glosario.php" class=" flow-text  ">Glosario</a>
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
                <a href="Glosario.php">Glosario de Libros</a>
            </li>
            <li>
                <div class="divider"></div>
            </li>
            <li>
                <a href="ca.php">Casa Amiga</a>
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


<div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div>
            <h1 class="center nomtop">Cerro de Ortega</h1>

            <nav class="container">
                <div class="nav-wrapper">
                    <form>

                        <div class="input-field  deep-purple accent-4">
                            <input id="search" type="search" onkeypress="return runScript(event);" required>

                            <label class="label-icon" for="search">
                                <i class="material-icons ">search</i>
                            </label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <div class="parallax">
        <img src="img/prueba.jpg" alt="Unsplashed background img 2">
    </div>
</div>
<div class="container flow-text center  ">

    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat repellendus natus rem ipsum nam esse! Nisi ut
        dolore temporibus neque deserunt similique, voluptatibus culpa iste voluptas error minus accusamus autem. </p>
</div>

<footer class="page-footer light-blue darken-4">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h5 class="white-text">Acerca de PA</h5>
                <p class="grey-text text-lighten-4">
                    <a href="https://www.projectamigo.org/" class="kk" target="_blank">Proyecto Amigo</a> es una
                    asociación
                    civil sin fines de lucro, la cual apoya a estudiantes en el estado de
                    Colima, dándole las herramientas y el apoyo para que terminen sus estudios y tengan mayores
                    oportunidades.
                    Las oficinas hubicadas en la comunidad de Cofradia de Suchitlan Comala Col.


                </p>
                <small class="kk flow-text">
                    <a href="https://mx.linkedin.com/in/fernanceballos" target="_blank">C</a>
                    <a href="https://www.facebook.com/0114leonel" target="_blank">L</a>
                    <a href="https://www.facebook.com/alvarosalvador.florestirado" target="_blank">S</a>
                </small>

            </div>


        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made with
            <a class="brown-text text-lighten-3" href="#">love❤</a> and <a class="brown-text text-lighten-3" href="#">gratitud</a>
        </div>
    </div>
</footer>
<!--  Scripts-->
<script src="js/jquery.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>

</html>