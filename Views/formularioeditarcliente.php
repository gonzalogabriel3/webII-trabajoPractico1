<?php 

$doc = $_GET['documento'];
$ape = $_GET['apellido'];
$nom = $_GET['nombre'];
$fech = $_GET['fecha_nacimiento'];
$pais = $_GET['pais'];
$act = $_GET['activo'];



 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
 
     <link href="../Resources/css/bootstrap.min.css" rel="stylesheet">


  </head>
<body>
   <!--<h1>Hello, world!</h1>--> 

    
    <div class="container">
    
      <div class="jumbotron">
        <h1>Actualizar Registro de Clientes </h1></div>
      
      <div>
      		<div align="center">	<a href="actualizarcliente.php" class="btn btn-primary" > Nuevo Cliente</a>
          	<p>
            </div>
	        	
      		<form action="guardarcliente.php" method="post">
      		  <table class="table table-hover">
      		    <tr>
      		      <td align="right">Documento: </td>
      		      <td><input type="text" name="dni" value="<?php echo $doc ?>">
      		        </input></td>
   		        </tr>
      		    <tr>
      		      <td align="right">Apellido: </td>
      		      <td><input type="text" name="apellido" value="<?php echo $ape ?>">
      		        </input></td>
   		        </tr>
      		    <tr>
      		      <td align="right">Nombre: </td>
      		      <td><input type="text" name="nombre" value="<?php echo $nom ?>">
      		        </input></td>
   		        </tr>
      		    <tr>
      		      <td align="right">Fecha Nacimiento: </td>
      		      <td><input type="text" name="fecha_nac" value="<?php echo $fech ?>">
      		        </input></td>
   		        </tr>
      		    <tr>
      		      <td align="right">Pais  :</td>
      		      <td><input type="text" name="nacionalidad_id" value="<?php echo $pais ?>">
      		        </input></td>
   		        </tr>
      		    <tr>
      		      <td align="right">Activo: </td>
      		      <td><input type="text" name="activo" value="<?php echo $act ?>" >
      		        </input></td>
   		        </tr>
      		    <tr>
      		      <td></td>
      		      <td><input name="guardar" type="submit" class="btn btn-success" value="Actualizar Registro">
      		        </input></td>
   		        </tr>
   		      </table>
      		</form>
   
        
        </div>
  </div>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../Resources/js/jquery-1.11.3.min"></script>
 
    <!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="../Resources/js/bootstrap.min.js"></script>
</body>
</html>