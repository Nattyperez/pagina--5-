<?php
	EliminarProducto($_GET['no']);

	function EliminarProducto($no)
	{
		include "conexion.php";
		$sentencia = "DELETE FROM datos WHERE id_cliente='".$no."' ";
		$conexion->query($sentencia) or die ("Error al eliminar ". mysqli_error($conexion));
	}
?>


<script>
	alert("Dato Eliminado exitosamente");
	window.location.href='index.php';
</script>