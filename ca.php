<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Casa Amiga</title>
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
<!-- 
search var-- 
  -->

<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div>
        <h1 class="center nomtop">Casa Amiga</h1>

            <nav class="container">
                <div class="nav-wrapper">
                    <form>
                        <div class="input-field yellow darken-2">
                            
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
        <img src="img/jonh.jpg" alt="latest background">
    </div>
</div>
<br>



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




<!--  Scripts-->
<script src="js/jquery.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>

</html>