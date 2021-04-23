<?php
include ("includes/conexion.php");


// inicializar variables

$modelo =utf8_encode( $_POST["modelo"] );
$marca  =utf8_encode( $_POST["marca"]);
$precio = utf8_encode($_POST["precio"]);
$color = utf8_encode($_POST["color"]);  
$estado =utf8_encode( $_POST["estado"]);  


   
//encabezado
$guardar = "INSERT INTO tblcelular(codigo,modelo,marca,precio,color,estado) 
VALUES (NULL,'$modelo','$marca','$precio','$color','$estado')";
//ejecutar query
$result = mysqli_query($conexion, $guardar); 

if ( $result == true ) {
	echo'<script type="text/javascript"> 
	alert("Celular insertado!");
	window.location.href="index.php";   
	</script>';

}else {
	echo'<script type="text/javascript"> 
	alert("Hubo un error , volver a intentar!");
	window.location.href="index.php";   
	</script>'; 

}

include ("includes/desconexion.php");
?>	