<?php
error_reporting(0);

include("includes/conexion.php");

// inicializar variables
$codigo = $_POST['codigo'];
$modelo = $_POST["modelo"];
$marca  = $_POST["marca"];
$precio = $_POST["precio"];
$color = $_POST["color"];
$estado = $_POST["estado"];


// ejecutar query
$update = $conexion->query("UPDATE tblcelular SET modelo='$modelo',marca='$marca',precio='$precio',color='$color', estado='$estado' WHERE codigo='$codigo' ");



if ($update) {
    echo '<script type="text/javascript">
    alert("Actualización realizada");
    window.location.href="index.php";   
    </script>';
} else {
    echo '<script type="text/javascript">
	alert("Hubo un error intente nuevamente.");
	window.location.href="index.php";   
	</script>';
}
include("includes/desconexion.php");
