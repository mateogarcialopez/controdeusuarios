<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fACTURAS</title>
    <script>
        function modificar(cod) {
            //alert(cod);
            window.location = "http://localhost/controlDeUusuarios/Sucursal/modificarSucursales.php?parametro="+cod; // enviamos el codigo capturado a otro archivo
        }

        function eliminar(cod) { 
            window.location = "http://localhost/controlDeUusuarios/Sucursal/capturarSucursales.php?p="+cod+"&funcion=eliminar";
        }
    </script>
</head>

<body>
    <?php 
    //para la tabla Sucursales
    require "../class/conexionMSQL.php";
    $obj = new conexionMSQL();

    $datosSucursal = $obj->consultarSucursal("SELECT * FROM tbl_Sucursal");
    ?>

    <h3>Listado De Sucursales</h3>
    <table border="1">
        <tr>
            <td>pk_sucursal</td>
            <td>nombre</td>
            <td>direccion</td>
            <td>fk_barrio</td>
            <td>editar</td>
            <td>eliminar</td>
           
        </tr>
        <tr>
            <?php foreach ($datosSucursal as $fila) { ?>
            <td><?php echo $fila["pk_sucursal"]; ?></td>
            <td><?php echo $fila["nombre"]; ?></td>
            <td><?php echo $fila["direccion"]; ?></td>
            <td><?php echo $fila["fk_barrio"]; ?></td>
            <td><img src="../img/pc1.png" width="20" onclick="modificar(<?php echo $fila["pk_sucursal"]; ?>)" /></td> <!-- capturamos la pkfactura en un metodo -->
            <td><img src="../img/eliminar.png" width="20" onclick="eliminar(<?php echo $fila["pk_sucursal"]; ?>)" /></td>

        </tr>
        <?php } ?>

    </table>

</body>

</html> 