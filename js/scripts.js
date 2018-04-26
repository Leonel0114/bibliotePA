$(document).ready(function() {
    $('select').material_select();
    $('.slider').slider({indicators:false});
  });

  function prueba(){
    event.preventDefault();
    var nombre;
    var autor;
    var origen;
    var editorial;
    var genero;
    var estado;
    var dependencia;

  
  nombre = $('#nombre').val();
  autor =$('#autor').val();
  origen = $('#origen').val();
  editorial=$('#editorial').val();
  genero =$('#genero').val();
  estado=$('#estado').val();
  dependencia=$('#dependencia').val();

  if (nombre!="" && autor!=""&& origen!="" && editorial!="" && genero!="" && estado!="" && dependencia!="") {
   
    $.post('controllers/add_libro.php', { nombre: nombre, autor: autor, editorial: editorial, origen:origen, genero:genero, estado:estado,dependencia:dependencia},
    function (data) {
      
  $('#nombre').val("");
  $('#nombre').val("");
  $('#autor').val("");
  $('#origen').val("");
  $('#editorial').val("");
  $('#genero').val("1");
  $('#estado').val("1");
  $('#dependencia').val("1");
        Materialize.toast(data, 4000, 'rounded');
      
    });
  }else{  Materialize.toast("Campos vacios", 4000, 'rounded');}
  
  console.log(nombre);
  console.log(autor);
  console.log(origen);
  console.log(editorial);
  console.log(genero);
  console.log(estado);
  console.log(dependencia);




  }


function rellenar(array) {


  var cardsToShow = '';



  jQuery.each(array, function (index, value) {
      console.log(index, value)



      var colour;

      if(value.Estado=="Ocupado" ){

          colour = "#37474f"
      }else {colour="#00695c"}

      // Por cada registro en el array se agrega uno de estos
      cardsToShow += '<div id=card' + value.codigo + ' class="col s12 m6 l3">' +
          '                <div class="card small animated fadeInUp"  style="background-color:'+colour+'">' +
          '                    <div class="card-content white-text">' +
          '                        <span class="card-title">' + value.nombre + '</span>' +
          '                        <p>' + value.autor + '</p>' +
          '                        <p>' + value.Estado + '</p>' +
          '                        <p>' + value.genero + '</p>' +
          '                    </div>' +
          '                </div>' +
          '            </div>';
  })


  $('#cards').html(cardsToShow);
}

// La función que manda a llamar mi PHP
function getData() {
  $.ajax({
      type: 'POST',
      url: 'controllers/dross.php',

      success: function (response) {
          console.log(response);


          var mylibros =JSON.parse(response);
          rellenar(mylibros);
      }
  });
}
