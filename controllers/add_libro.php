<?php
include ("SQL.php");
$conn =new SQL();
$conn ->start();

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$autor = isset($_POST['autor']) ? $_POST['autor'] : null;
$editorial = isset($_POST['editorial']) ? $_POST['editorial'] : null;   
$origen = isset($_POST['origen'])? $_POST['origen']:null;
$genero =isset($_POST['genero'])? $_POST['genero']:null;
$estado=isset($_POST['estado'])? $_POST['estado']: null ;
$dependencia=isset($_POST['dependencia'])? $_POST['dependencia']: null;

$sql="INSERT INTO libros (nombre, autor, editorial, genero, Estado, Dependencia, Origen) VALUES ('".$nombre."','".$autor."','".$editorial."','".$genero."','".$estado."','".$dependencia."','".$origen."')";
$conn->insert($sql);
echo $nombre." ha sido agregado";			
$conn->closeConection();

?>