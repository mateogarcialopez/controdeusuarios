<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fACTURAS</title>
</head>

<body>
    <?php 
    //para la tabla FACTURAS
    require "../class/conexionMSQL.php";
    $obj = new conexionMSQL();

    $datosFactura = $obj->consultarFactura("SELECT * FROM tbl_factura");
    ?>

    <h3>Listado De Facturas</h3>
    <table border="1">
        <tr>
            <td>Codigo</td>
            <td>Fecha</td>
            <td>iva</td>
            <td>Descuento</td>
            <td>Codigo Cliente</td>
            <td>Codigo Cajero</td>
        </tr>
        <tr>
            <?php foreach ($datosFactura as $fila) { ?>
            <td><?php echo $fila["pk_factura"]; ?></td>
            <td><?php echo $fila["fecha"]; ?></td>
            <td><?php echo $fila["iva"]; ?></td>
            <td><?php echo $fila["descuento"]; ?></td>
            <td><?php echo $fila["fk_cliente"]; ?></td>
            <td><?php echo $fila["fk_cajero"]; ?></td>
        </tr>
        <?php } ?>

    </table>

</body>

</html> 