<?php //require("../Models/conexion.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registrar Clientes</title>

    <!-- Bootstrap -->
 
     <link href="../Resources/css/bootstrap.min.css" rel="stylesheet">
     <script type="text/javascript">
         window.onload()=function (){
                document.
                
    
    
        } 
     </script>    
  </head>
<body>
   <!--<h1>Hello, world!</h1>--> 

    
    <div class="container">
    
      <div class="jumbotron"><h1>Registro de Clientes </h1></div>
      
      <div>
      		<div align="center">
                 <br>
            </div>
	        	
      		<form action="guardarcliente.php" method="post">
      		  <table class="table table-hover">
      		    <tr>
      		      <td align="right">Documento: </td>
      		      <td><input type="text" name="dni">
      		        </input></td>
   		        </tr>
      		    <tr>
      		      <td align="right">Apellido: </td>
      		      <td><input type="text" name="apellido">
      		        </input></td>
   		        </tr>
      		    <tr>
      		      <td align="right">Nombre: </td>
      		      <td><input type="text" name="nombre">
      		        </input></td>
   		        </tr>
      		    <tr>
      		      <td align="right">Fecha Nacimiento: </td>
      		      <td><input type="text" name="fecha_nac">
      		        </input></td>
   		        </tr>
      		    <tr>
      		      <td align="right">Pais  :</td>
      		      <td><input type="text" name="nacionalidad_id">
      		        </input></td>
   		        </tr>
      		    <tr>
      		      <td align="right">Activo: </td>
                      <td><input type="checkbox" name="activo">
      		        </input></td>
   		        </tr>
      		    <tr>
      		      <td></td>
      		      <td><input name="guardar" type="submit" class="btn btn-success" value="Registrar los datos">
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