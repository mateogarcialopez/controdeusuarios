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
    require "class/conexionMSQL.php";
    $obj = new conexionMSQL();

    $datosFactura = $obj->consultarFactura("SELECT * FROM tbl_factura");
    ?>

    <table>
        <tr>

            <td>
                <h3>Listado De Facturas</h3>
                <table border="1">
                    <tr>
                        <td>Codigo</td>
                        <td>Fecha</td>
                        <td>iva</td>
                        <td>Descuento</td>
                        <td>Codigo Cliente</td>
                        <td>Codigo Cajer</td>
                    </tr>
                    <tr>
                        <?php foreach ($datosFactura as $fila) { ?>
                        <td><?php echo $fila["pk_factura"]; ?></td>
                        <td><?php echo $fila["pk_factura"]; ?></td>
                        <td><?php echo $fila["pk_factura"]; ?></td>
                        <td><?php echo $fila["pk_factura"]; ?></td>
                        <td><?php echo $fila["pk_factura"]; ?></td>
                        <td><?php echo $fila["pk_factura"]; ?></td>
                    </tr>
                    <?php } ?>

                </table>
            </td>
        </tr>
    </table>

</body>

</html> 