<?php
$conexion=mysqli_connect("localhost","root","","formulario_pag");
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","formulario_pag");

$consulta="SELECT*FROM datos where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas){
  // header("location.home.php");
    header("location:http://127.0.0.1:5500/index.html");
   
}else{
    ?>
    <?php
    include("login.html");
  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);