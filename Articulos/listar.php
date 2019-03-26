<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        function modificar(cod) { //funcion para capturar las pk de articulos
            window.location = "http://localhost/controlDeUusuarios/Articulos/modificar.php?parametro=" + cod;
        }

        function eliminar(cod) { //funcion para capturar las pk de articulos
            window.location = "http://localhost/controlDeUusuarios/Articulos/capturar.php?p=" + cod + "&funcion=eliminar";
        }
    </script>
</head>

<body>
    <?php 
    //para la tabla articulos
    require "../class/conexionMSQL.php";
    $obj = new conexionMSQL();

    $datos = $obj->consultar("SELECT descripcionArticulo,stockArticulo,stock_minArticulo,pk_articulo FROM tbl_articulos");
    //$datosUsuarios = $obj->consultar("SELECT User FROM user");

    //print_r($datos); //el print_r nos permite mostrar todos los datos que existen dentro de un array
    ?>

    <table border="1">
        <h3>Listado De Articulos</h3>
        <tr>
            <td>codigo</td>
            <td>Descripcion</td>
            <td>Stock</td>
            <td>Stock Minimo</td>
            <td>Modificar</td>
            <td>Eliminar</td>
        </tr>
        <?php foreach ($datos as $fila) { ?>
        <tr>
            <td><?php echo $fila["pk_articulo"]; ?></td>
            <td><?php echo $fila["descripcionArticulo"]; ?></td>
            <td><?php echo $fila["stockArticulo"]; ?></td>
            <td><?php echo $fila["stock_minArticulo"]; ?></td>
            <td><img src="../img/pc1.png" width="20" onclick="modificar(<?php echo $fila["pk_articulo"]; ?>)" /></td>
            <td><img src="../img/eliminar.png" width="20" onclick="eliminar(<?php echo $fila["pk_articulo"]; ?>)" /></td>
        </tr>
        <?php 
      } ?>
    </table>
</body>

</html> 