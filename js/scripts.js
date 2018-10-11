function prueba() {
  event.preventDefault();
  var nombre;
  var autor;
  var origen;
  var editorial;
  var genero;
  var estado;
  var dependencia;

  nombre = $("#nombre").val();
  autor = $("#autor").val();
  origen = $("#origen").val();
  editorial = $("#editorial").val();
  genero = $("#genero").val();
  estado = $("#estado").val();
  dependencia = $("#dependencia").val();

  if (
    nombre != "" &&
    autor != "" &&
    origen != "" &&
    editorial != "" &&
    genero != "" &&
    estado != "" &&
    dependencia != ""
  ) {
    $.post(
      "controllers/add_libro.php",
      {
        nombre: nombre,
        autor: autor,
        editorial: editorial,
        origen: origen,
        genero: genero,
        estado: estado,
        dependencia: dependencia
      },
      function(data) {
        $("#nombre").val("");
        $("#nombre").val("");
        $("#autor").val("");
        $("#origen").val("");
        $("#editorial").val("");
        $("#genero").val("1");
        $("#estado").val("1");
        $("#dependencia").val("1");
        M.toast({ html: data + "ha sido agregado ", classes: "rounded" });
      }
    );
  } else {
    M.toast({ html: "Campos basios !!!", classes: "rounded" });
  }
}
function trambolico() {}

function rellenar(array) {
  console.log("array: " + array);
  console.log("array[0].nombre" + array[0].nombre);
  console.log("array[1].nombre" + array[1].nombre);

  var cardsToShow = "";

  jQuery.each(array, function(index, value) {
    var colour;

    if (value.Estado == "Ocupado") {
      colour = "#bf360c  ";
    } else {
      colour = "#00838f  ";
    }

    // Por cada registro en el array se agrega uno de estos
    cardsToShow +=
      "<div id=card" +
      value.codigo +
      ' class="col s12 m6 l3">' +
      '                <div class="card animated fadeInUp"  style="background-color:' +
      colour +
      '">' +
      '                    <div class="card-content white-text">' +
      '                        <span class="card-title">' +
      value.nombre +
      "</span>" +
      "                        <p>" +
      value.autor +
      "</p>" +
      /*       '                        <p>' + value.Estado + '</p>' + */
      "                        <p>" +
      value.genero +
      "</p>" +
      "                    </div>" +
      "                </div>" +
      "            </div>";
  });

  console.log("cards to show: " + cardsToShow);

  $("#cards").html(cardsToShow);
}

// La función que manda a llamar mi PHP
function getData() {
  $.ajax({
    type: "POST",
    url: "controllers/dross.php",

    success: function(response) {
      var mylibros = JSON.parse(response);
      rellenar(mylibros);
    }
  });
}

function tostada() {
  var buscar;
  buscar = $("#search").val();
  M.toast({ html: "Buscando" + " " + buscar, classes: "rounded" });
}


function getDataFromInput()
{
  $.ajax({
    type: "POST",
    url: "controllers/dross.php",

    success: function(response) {
      var mylibros = JSON.parse(response);
      rellenar(mylibros);
    }
  });

}

function runScript(e) {
  if (e.keyCode == 13) {
    var buscar;
    buscar = $("#search").val();
    tostada();
    getDataFromInput()
    //getData();

    return false;
  } else {
    return true;
  }
}

window.search = function() {
  M.toast({ html: buscar, classes: "rounded" });
};
