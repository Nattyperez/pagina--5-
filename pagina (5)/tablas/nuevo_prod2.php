<?php

      NuevoProducto($_POST['id_cliente'],$_POST['nombre'],$_POST['apellido_p'],$_POST['apellido_m'],$_POST['num_telefono'],$_POST['usuario'],$_POST['contraseña']);
    
    function NuevoProducto($id_cliente, $nombre, $apellido_p, $apellido_m, $num_telefono, $usuario, $contraseña)
    {
        include 'conexion.php';
        // $sentencia= "INSERT INTO productos (nombre, apellido_p, apellido_m, num_telefono, usuario, contraseña) VALUES ('".$nombre."', '".$apellido_p."', '".$apellido_m."', '".$num_telefono."' '".$usuario."' '".$contraseña."') ";
        $sentencia = "INSERT INTO `datos` (`id_cliente`, `nombre`, `apellido_p`, `apellido_m`, `num_telefono`, `usuario`, `contraseña`) VALUES ('".$id_cliente."','".$nombre."','".$apellido_p."','".$apellido_m."','".$num_telefono."','".$usuario."','".$contraseña."') ";
        $conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
    }
?>

<script type="text/javascript">
    alert("Dato Ingresado Exitosamante!!");
    window.location.href='index.php';
</script>
