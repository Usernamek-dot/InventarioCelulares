<?php
include("includes/conexion.php");    //se abre conexion a la bd
$consultaEstado =  mysqli_query($conexion, "SELECT codigo , nombre FROM tblestado");


?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="img/icono.png" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <h1 class="display">Formulario de registro</h1>
    </div>
    <br><br>
    <div class="container">
        <form action="insert.php" method="post">


            <div class="mb-3">
                <label class="form-label">Modelo</label>
                <input name="modelo" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Marca</label>
                <input name="marca" type="text"  class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input name="precio" type="number"class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Color</label>
                <input name="color" type="text"  class="form-control">
            </div>


            <div class="mb-3">
                <label class="form-label">Estado</label>

                <select required name="estado" class="form-select" >
                <option selected>Seleccione</option>                    <?php
                    while ($dato = mysqli_fetch_array($consultaEstado)) { //array recorre fila
                    ?>
                        <option value="<?php echo $dato['codigo'] ?>"> <?php echo $dato['nombre'] ?> </option>
                    <?php } ?>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</body>

</html>