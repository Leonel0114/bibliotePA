<?php
include ("sql.php");
$var = $_POST['datoInput'];
$conn =new SQL();
$conn ->start();

 $sql= "SELECT nombre FROM libros WHERE nombre='.$var.'"; 
 $cdo= "SELECT COUNT(*) FROM libros WHERE Dependencia='Casa Amiga'";
 

// $sql= "SELECT  nombre,autor, genero FROM libros;"




$resultados= $conn->select($sql);
$campos=array(1);
$campos=$resultados->fetch_all(MYSQLI_ASSOC);
$conn->closeConection();

echo json_encode($campos);	
?>