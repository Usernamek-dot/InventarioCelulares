<?php
include("includes/conexion.php");
// traer pk codigo
$codigo = $_REQUEST['codigo'];

$delete = $conexion->query(" DELETE FROM  tblcelular WHERE  codigo=" . $codigo);

// validar
if ($delete) {
    echo '<script type="text/javascript">
	alert("Se eliminará el celular del inventario");
    window.location.href="index.php";</script>';
} else {
    echo '<script type="text/javascript">
	alert("Hubo un error , intentar nuevamente");
    window.location.href="index.php"; </script>';
}

include("includes/conexion.php");
