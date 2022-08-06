<?php
//  include 'conexion.php';
    // ModificarProducto($_POST['nombre'],$_POST['apellido_p'], $_POST['apellido_m'],$_POST['num_telefono'], $_POST['usuario'],$_POST['contraseña']);
    ModificarProducto($_POST['id_cliente'],$_POST['nombre'],$_POST['apellido_p'],$_POST['apellido_m'],$_POST['num_telefono'],$_POST['usuario'],$_POST['contraseña']);

    function ModificarProducto($id_cliente,$nombre, $apellido_p, $apellido_m, $num_telefono, $usuario, $contraseña)
    {
        $conexion=mysqli_connect('localhost','root','','formulario_pag');
        echo $sql= "UPDATE datos SET  id_cliente='".$id_cliente."',nombre='".$nombre."', apellido_p= '".$apellido_p."', apellido_m='".$apellido_m."', num_telefono= '".$num_telefono."', usuario= '".$usuario."', contraseña='".$contraseña."' WHERE id_cliente='".$id_cliente."' ";
        $conexion->query($sql) or die ("Error al modificar".mysqli_error($conexion));
        
    }
?>

<script type="text/javascript">
    alert("Datos Actualizados Exitosamante!!");
    window.location.href='index.php';
</script>

