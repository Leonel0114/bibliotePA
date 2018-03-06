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

