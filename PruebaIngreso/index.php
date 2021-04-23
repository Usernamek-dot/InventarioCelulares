<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="img/icono.png" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario de celulares</title>



    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/fa9adf4dd2.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <!-- funcion por defecto del datatable -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        });

    </script>


    <div class="container d-flex justify-content-between">
        <h1 class="display">Inventario de celulares</h1>
        <a href="insertar.php" data-bs-toggle="popover" title="Insertar nuevo celular"> <i class="fas fa-plus-circle"></i> </a>

    </div>
    <br>




    <table id="example" class="display  jTable" style="width:100%">
        <thead>
            <tr>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Precio</th>
                <th>Color</th>
                <th>Estado</th>
                <th>Eliminar</th>
                <th>Actualizar</th>

            </tr>
        </thead>
        <?php
        //traer la conexion
        include "includes/conexion.php";
        // consulta para traer todos los datos
        $seleccionar = $conexion->query("SELECT c.codigo ,  e.nombre as 'estado' , c.modelo , c.marca , c.precio , c.color FROM tblcelular as c INNER JOIN tblestado as e ON  c.estado = e.codigo");
        //recorrer el query
        while ($datos = $seleccionar->fetch_assoc()) {
        ?>
            <tbody>


                <!-- imprimir los datos -->
                <tr >
                    <td ><?php echo $datos['modelo']; ?></td>
                    <td> <?php echo $datos['marca']; ?></td>
                    <td> <?php echo $datos['precio']; ?></td>
                    <td><?php echo $datos['color']; ?></td>
                    <td><?php echo $datos['estado']; ?></td>
                    <td><a href="eliminar.php?codigo=<?php echo $datos['codigo'] ?>" data-bs-toggle="popover" title="Eliminar celular"><i class="fas fa-trash-alt"></i></a></td>
                    <td><a href="actualizar.php?codigo=<?php echo $datos['codigo'] ?>" data-bs-toggle="popover" title="Actualizar celular"> <i class="fas fa-pencil-alt"></i> </a> </td>
                </tr>


            </tbody>
        <?php
        } //se cierra ciclo while
        include "includes/desconexion.php";
        ?>

        <tfoot>
            <tr>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Precio</th>
                <th>Color</th>
                <th>Estado</th>
                <th>Eliminar</th>
                <th>Actualizar</th>
            </tr>
        </tfoot>
    </table>



</body>


</html>