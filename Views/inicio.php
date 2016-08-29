<?php require("../Models/conexion.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio</title>

    <!-- Bootstrap -->
 
     <link href="../Resources/css/bootstrap.min.css" rel="stylesheet">


  </head>
<body>
   <!--<h1>Hello, world!</h1>--> 

    
    <div class="container">
    
      <div class="jumbotron"><h1>Listado de Clientes </h1></div>
      
      <div>
          <div align="center">	<a href="formularioclientes.php" class="btn btn-primary" title="Registrar un nuevo cliente"> Nuevo Cliente</a>
          	<p>
            </div>
	        	
      
    	<table class="table table-hover">
            <tr class="danger">
                <td><b>DNI</b></td>
                <td><b>APELLIDO</b></td>
                <td><b>NOMBRE</b></td>
                <td><b>EDAD</b></td>
                <td><b>PAIS</b></td>
                <td><b>ACTIVO</b></td>
                <td></td>
                <td></td>
            </tr>
       	 <?php foreach($clientes as $cliente):?>
            <tr class="active">
				<td><?php echo $cliente->documento_cliente ?></td>       
				<td><?php echo $cliente->apellido_cliente ?></td>		        
				<td><?php echo $cliente->nombre_cliente ?></td>
                <td><?php echo $cliente->Fech_nac_cliente ?></td>
                <td><?php echo $cliente->nombre_pais ?></td>
                <td><?php 
                if($cliente->activo_pais==1){
                    echo "<img src='../Resources/img/activo.png' width='25' height='25'>";
                }else{
                    echo "<img src='../Resources/img/desactivo.png' width='25' height='25'>";
                }
              
                
                ?></td>         
                <td> 
                <a href="formularioeditarcliente.php?documento=<?php echo $cliente->documento_cliente ?>&apellido=<?php echo $cliente->apellido_cliente ?>&nombre=<?php echo $cliente->nombre_cliente ?>&
                				fecha_nacimiento=<?php echo $cliente->Fech_nac_cliente ?>& 
                                pais=<?php echo $cliente->nombre_pais ?>&
                                activo=<?php echo $cliente->activo_pais ?>
                
                
                " aria-label="Left Align">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true" title="Editar"> </span> 
                </a> 
                </td>
                
                 <td> 
                 <a href="eliminarcliente.php?documento=<?php echo $cliente->documento_cliente ?>" aria-label="Left Align">
                 
                  
                     <span class="glyphicon glyphicon-trash" aria-hidden="true" title="Borrar"> </span> 
                	</a>	
                </td>
	
	
	
            </tr>
        
         <?php endforeach;?>
        </table>  
        
        </div>
  </div>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../Resources/js/jquery-1.11.3.min"></script>
 
    <!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="../Resources/js/bootstrap.min.js"></script>
</body>
</html>