<?php
include ("sql.php");
$conn =new SQL();
$conn ->start();

$sql= "SELECT codigo, nombre, autor, genero, dependencia, Estado FROM libros WHERE nombre LIKE 'El%' ";
$resultados= $conn->select($sql);

$campos=array();

$campos=$resultados->fetch_all(MYSQLI_ASSOC);
$conn->closeConection();

echo json_encode($campos);	
?>