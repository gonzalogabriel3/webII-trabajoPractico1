<?php 


$db = new PDO('mysql:host=localhost;dbname=db_abm', 'root','');


$doc = $_POST['dni'];
$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$fech = $_POST['fecha_nac'];
$pais = $_POST['nacionalidad_id'];
$act = $_POST['activo'];

//UPDATE `clientes` SET `apellido` = 'avellanedas', `nombre` = 'gonzalos', `fecha_nac` = '1999-04-13', `nacionalidad_id` = '14', `activo` = '0' WHERE `clientes`.`id` = 26;

$db->query("UPDATE `clientes` SET apellido = '$ape', nombre = '$nom', fecha_nac = '$fech', nacionalidad_id = '$pais', activo = '$act' WHERE clientes`.id ='$doc'");

header("location: inicio.php")
?>