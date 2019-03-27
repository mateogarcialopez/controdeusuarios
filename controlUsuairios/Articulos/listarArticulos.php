<html>
    <head>
        <meta charset="UTF-8">
        <title>Articulos</title>
        <script>
            function modificar(id) {
                window.location = "http://localhost/controlDeUusuarios/controlUsuairios/Articulos/modificarArticulo.php?parametro=" + id;
            }
            function eliminar(id) {
                window.location = "http://localhost/controlDeUusuarios/controlUsuairios/Articulos/capturarArticulo.php?parametro=" + id + "&funcion=eliminar";
            }

        </script>
    </head>

    <?php
    require "../controlDB.php";
    $obj = new controlDB();
    $datos = $obj->consultar("SELECT * FROM public.\"tbl_Articulos\"");
    ?>
    <h1>ARTICULOS  </h1>
    <table border=1 >
        <tr>
            <td> <a  href="http://localhost/controlDeUusuarios/controlUsuairios/menuPrincipal.php" ><img  src="../Views/img/home.png" width="20"  /></a></td>
            <td> <a  href="http://localhost/controlDeUusuarios/controlUsuairios/Articulos/insertarArticulo.php" ><img  src="../Views/img/adc.png" width="20"  /></a></td>
        </tr>
    </table
    <hr />
    <table border=1 >
        <tr>
            <td>Nombre</td>
            <td>Stock</td>
            <td>Stock Minimo</td>
            <td align="center" colspan="2">Conf</td>
        </tr>
        <?php foreach ($datos as $filas) { ?> 
            <tr>    
                <td><?php echo $filas["descripcionArticulo"]; ?></td>
                <td><?php echo $filas["stockArticulo"]; ?></td>
                <td><?php echo $filas["stock_minArticulo"]; ?></td>
                <td align="center"><img  src="../Views/img/edt.png" width="20" onclick="modificar(<?php echo $filas["pk_Articulo"]; ?>)" /></td>
                <td align="center"><img  src="../Views/img/del.png" width="20" onclick="eliminar(<?php echo $filas["pk_Articulo"]; ?>)" /></td>

            <tr>
            <?php } ?>
    </table>


</html>
