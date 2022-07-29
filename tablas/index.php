<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="estilo-bd.css">
<link rel="stylesheet" type="text/css" href="header2.css">
<script src="./js2/include2.js"></script>
<title>Ejemplo de interaccion con DB</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>

<div data-include="nav2.html"></div>
<div class="todo">
  
  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<table class="table-fill" style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
        <th>id_cliente</th>
  			<th>nombre</th>
  			<th>apellido_p</th>
  			<th>apellido_m</th>
  			<th>num_telefono</th>
        <th>usuario</th>
        <th>contraseña</th>
        <th> <a href="nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>
  		
  		
  		<?php
      include "conexion.php";
      // $sentencia="SELECT * FROM productos";
      $sentencia = "SELECT * FROM `datos`";
      // $resultado=mysqli_query($sentencia);
      $resultado=mysqli_query($conexion, $sentencia);
      while($filas=mysqli_fetch_assoc($resultado))
      {
        echo "<tr>";
          echo "<td>"; echo $filas['id_cliente']; echo "</td>";
          echo "<td>"; echo $filas['nombre']; echo "</td>";
          echo "<td>"; echo $filas['apellido_p']; echo "</td>";
          echo "<td>"; echo $filas['apellido_m']; echo "</td>";
          echo "<td>"; echo $filas['num_telefono']; echo "</td>";
          echo "<td>"; echo $filas['usuario']; echo "</td>";
          echo "<td>"; echo $filas['contraseña']; echo "</td>";

          echo "<td> <a href='modif_prod1.php?no=".$filas['id_cliente']."''> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td> <a href='eliminar_prod.php?no=".$filas['id_cliente']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      }

      ?>
  	</table>
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>