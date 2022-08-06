<?php
    
    $consulta=ConsultarProducto($_GET['no']);

    function ConsultarProducto($no)
    {
    include 'conexion.php';
    $sentencia="SELECT * FROM datos WHERE id_cliente='".$no."' ";
    // $resultado=mysql_query($sentencia) or die (mysqli_error()); 
    // $fila=mysql_fetch_assoc($resultado);
    $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
    $filas=$resultado->fetch_assoc();

    return [
      $filas['id_cliente'],
      $filas['nombre'],
      $filas['apellido_p'],
      $filas['apellido_m'],
      $filas['num_telefono'],
      $filas['usuario'],
      $filas['contraseña'],
      
    ];
    }
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificar Producto</title>
  <style type="text/css">
  @import url("css/mycss.css");
  </style>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  </head>
  <body>
  <div class="todo">
    
    <div id="cabecera">
      <img src="images/swirl.png" width="1188" id="img1">
    </div>
    
    <div id="contenido">
      <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
        <span> <h1>Modificar Producto</h1> </span>
        <br>
      <form action="modif_prod2.php" method="post" style="border-collapse: separate; border-spacing: 10px 5px;">
        <label>id_cliente: </label>
        <input type="text" name="id_cliente" id ="id_cliente" value="<?php echo $consulta[0] ?>" ><br>

        <label>nombre: </label>
        <input type="text" name="nombre"  id="nombre" value="<?php echo $consulta[1] ?>" ><br>

        <label>apellido_p: </label>
        <input type="text"  name="apellido_p" id="apellido_p" value="<?php echo $consulta[2] ?>" ><br>
        
        <label>apellido_m: </label>
        <input type="text"  name="apellido_m" id="apellido_m" value="<?php echo $consulta[3] ?>"><br>
        
        <label>num_telefono: </label>
        
        <input type="text"  name="num_telefono" id="num_telefono" value="<?php echo $consulta[4] ?>"><br>

        <label>usuario: </label>
        <input type="text"  name="usuario" id="usuario" value="<?php echo $consulta[5] ?>"><br>

        <label>contraseña: </label>
        <input type="text"  name="contraseña" id="contraseña" value="<?php echo $consulta[6] ?>"><br>
        
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
      </form>
      </div>
      
    </div>
    
    <div id="footer">
        <img src="images/swirl2.png" id="img2">
      </div>

  </div>


  </body>
  </html>