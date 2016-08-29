<?php 


$db = new PDO('mysql:host=localhost;dbname=db_abm', 'root','');

/*?>$clientes = $db->query('SELECT clientes.dni AS documento_cliente, clientes.apellido AS apellido_cliente, clientes.nombre AS nombre_cliente, clientes.fecha_nac AS Fech_nac_cliente, paises.nombre AS nombre_pais , clientes.activo  AS activo_pais FROM clientes LEFT JOIN paises ON paises.id = clientes.nacionalidad_id')->fetchAll(PDO::FETCH_OBJ);
<?php */

$doc = $_POST['dni'];
$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$fech = $_POST['fecha_nac'];
$pais = $_POST['nacionalidad_id'];
$act = $_POST['activo'];


$db->query("INSERT INTO clientes (dni, apellido, nombre, fecha_nac, nacionalidad_id, activo) VALUES ('$doc','$ape','$nom', '$fech','$pais', '$act')");

header("location: inicio.php")
?>