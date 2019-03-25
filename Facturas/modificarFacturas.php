<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Modificar datos</title>
</head>

<body>
    <?php 
    $cod = $_GET["parametro"]; //capturamos el dato que se envia en parametro
    require "../class/conexionMSQL.php";
    $obj = new conexionMSQL();
    $data = $obj->consultarFactura("SELECT * FROM tbl_factura WHERE pk_factura=$cod");
    ?>

    <h2>Modificar factura</h2>
    <hr>
    <form action="capturarFacturas.php" method="post">
        <!--en capturarFacturas.php vamos a capturar todos los datos ingresados en la tabla -->
        <table border="1">
            <?php foreach ($data as $fila) { ?>
            <!-- se hace el for para capturar todos los datos necesarios y mostrarlos -->

            <tr>
                <td>codigo</td>
                <td><?php echo $cod; ?></td>
            </tr>
            <tr>
                <td>Fecha</td>
                <td><input type="text" name="txtfecha" value="<?php echo $fila["fecha"]; ?>" /></td>
            </tr>
            <tr>
                <td>iva</td>
                <td><input type="text" name="txtiva" value="<?php echo $fila["iva"]; ?>" /></td>
            </tr>
            <tr>
                <td>Descuento</td>
                <td><input type="text" name="txtdescuento" value="<?php echo $fila["descuento"]; ?>" /></td>
            </tr>
            <tr>
                <td>fk Cliente</td>
                <td><input type="text" name="txtfkcleinte" value="<?php echo $fila["fk_cliente"]; ?>" /></td>
            </tr>
            <tr>
                <td>fk Cajero</td>
                <td><input type="text" name="txtfkcajero" value="<?php echo $fila["fk_cajero"]; ?>" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="GUARDAR" /></td>
            </tr>
            <?php } ?>
        </table>
        <input type="hidden" name="funcion" value="modificar" />
        <input type="hidden" name="cod" value="<?php echo $cod; ?>" />
    </form>


</body>

</html> 