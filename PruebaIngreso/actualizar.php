<?php
include("includes/conexion.php");    //se abre conexion a la bd

$codigo = $_REQUEST['codigo']; //se recupera el codigo para que la informacion se guarde en la bd con  el metodo REQUEST


$consultaEstado =  mysqli_query($conexion, "SELECT codigo , nombre FROM tblestado");


$seleccionar = mysqli_query($conexion, " SELECT c.codigo,  c.modelo , c.marca , c.precio, c.color ,  e.nombre as 'estado'  FROM tblcelular as c INNER JOIN tblestado as e on e.codigo = c.estado WHERE c.codigo = " . $codigo); //se hace la consulta a la tabla PERSONA con el codigo
//CONSULTAS PARA TRAER DATOS DE LA BD
if ($fila = $seleccionar->fetch_assoc()) {
} //en el arreglo asociativo FILA  se guarda la informacion de la fila que se llame por el codigo



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="img/icono.png" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <h1 class="display">Formulario de actualizacion</h1>
    </div>
    <br><br>
    <div class="container">
        <form action="update.php" method="post">

            <input name="codigo" type="hidden" value="<?php echo $fila['codigo'] ?>" class="form-control">


            <div class="mb-3">
                <label class="form-label">Modelo</label>
                <input name="modelo" type="text" value="<?php echo $fila['modelo'] ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Marca</label>
                <input name="marca" type="text" value="<?php echo $fila['marca'] ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input name="precio" type="number" value="<?php echo $fila['precio'] ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Color</label>
                <input name="color" type="text" value="<?php echo $fila['color'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Estado</label>

                <select  name="estado" class="form-select">
                    <option disabled selected value="<?php echo $fila['estado'] ?>"> <?php echo $fila['estado'] ?> </option>
                    <?php
                    while ($dato = mysqli_fetch_array($consultaEstado)) { //array recorre fila
                    ?>
                        <option value="<?php echo $dato['codigo'] ?>"> <?php echo $dato['nombre'] ?> </option>
                    <?php } ?>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>


</body>

</html>