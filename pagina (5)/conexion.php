

 <?php
//conexion con el serividor
$mysqli=new mysqli('localhost','root','');
$mysqli->set_charset("utf8");
//Verificamos la conexion
if(!$mysqli){
    echo"nose pudo conectar";
}else{
    $base=mysqli_select_db($mysqli,'datos');
    if(!$base){
        echo"no se encontro la base de datos";
    }
}
//Extraccion de variables
$id_cliete=$_POST['id_cliente'];
$nombre=$_POST['nombre'];
$apellido_p=$_POST['apellido_p'];
$apellido_m=$_POST['apellido_m'];
$num_telefono=$_POST['num_telefono'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
//insertamos en la bd

// $sql1= "INSERT INTO `datospaginaweb` (`nombre`, `correo`, `contraseña`) VALUES ('$nombre', '$correo', '$contraseña')";


$sql1="INSERT INTO `datos` (`id_cliente`, `nombre`, `apellido_p`, `apellido_m`, `num_telefono`, `usuario`, `contraseña`) VALUES ('6', 'Jose ', 'Ramirez', 'Valencia', '8596', 'JULIO87', '8596');"

//Ejecutamos la sentencia bd
$ejecutar=mysqli_query($mysqli,$sql1);

//Checamos la ejecucion
if(!$ejecutar){
    echo"Hubo error";
}else{
    echo"datos guardados correctamente <br> <a href='formulario2.html'>Volver</a>";
}
?>





