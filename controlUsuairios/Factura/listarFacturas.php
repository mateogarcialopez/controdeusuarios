



<html>
    <head>
        <meta charset="UTF-8">
        <title>Facturas</title>
        <script>
            function modificar(id) {
                window.location = "http://localhost/controlUsuairios/Factura/modificarFactura.php?parametro=" + id;
            }
            function eliminar(id) {
                window.location = "http://localhost/controlUsuairios/Factura/capturarFactura.php?parametro=" + id + "&funcion=eliminar";
            }
        </script>
    </head>

    <?php
    require "../controlDB.php";
    $obj = new controlDB();
    $datos = $obj->consultar("SELECT * FROM public.tbl_factura");
    ?>
    <h1>Facturas</h1>
    <table border=1 >
        <tr>
            <td> <a  href="http://localhost/controlUsuairios/menuPrincipal.php" ><img  src="../Views/img/home.png" width="20"  /></a></td>
            <td> <a  href="http://localhost/controlUsuairios/Factura/insertarFactura.php" ><img  src="../Views/img/adc.png" width="20"  /></a></td>
        </tr>
    </table
    <hr />
    <table border=1 >
        <tr>
            <td>Fecha</td>
            <td>Cajero</td>
            <td>IVA</td>
            <td>Descuento</td>
            <td>Cliente</td>

            <td align="center" colspan="2">Conf</td>
        </tr>
        <?php foreach ($datos as $filas) { ?> 
            <tr>    
                <td><?php echo $filas["fecha"]; ?></td>
                <td><?php echo $filas["fk_cajero"]; ?></td>
                <td><?php echo $filas["iva"]; ?></td>
                <td><?php echo $filas["descuento"]; ?></td>
                <td><?php echo $filas["fk_cliente"]; ?></td>
                <td align="center"><img  src="../Views/img/edt.png" width="20" onclick="modificar(<?php echo $filas["pk_factura"]; ?>)" /></td>
                <td align="center"><img  src="../Views/img/del.png" width="20" onclick="eliminar(<?php echo $filas["pk_factura"]; ?>)" /></td>
            <tr>
            <?php } ?>
    </table>


</html>
