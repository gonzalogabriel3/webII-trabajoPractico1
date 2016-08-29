<?php 


$db = new PDO('mysql:host=localhost;dbname=db_abm', 'root','');


$doc = $_GET['documento'];



$db->query("DELETE FROM clientes WHERE dni = '$doc'");


header("location: inicio.php")

?>