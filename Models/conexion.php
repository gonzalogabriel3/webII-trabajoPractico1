<?php

$db = new PDO('mysql:host=localhost;dbname=db_abm', 'root','');
$clientes = $db->query('SELECT clientes.dni AS documento_cliente, clientes.apellido AS apellido_cliente, clientes.nombre AS nombre_cliente, clientes.fecha_nac AS Fech_nac_cliente, paises.nombre AS nombre_pais , clientes.activo  AS activo_pais FROM clientes LEFT JOIN paises ON paises.id = clientes.nacionalidad_id')->fetchAll(PDO::FETCH_OBJ);

?>
