<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>editar datos</title>
</head>

<body>
    <?php 
    $cod = $_GET["parametro"];
    require "../class/conexionMSQL.php";
    $obj = new conexionMSQL();
    $data = $obj->consultarSucursal("SELECT * FROM tbl_sucursal WHERE pk_sucursal=$cod");
    ?>

    <h2>editar sucursales</h2>
    <hr>
    <form action="capturarSucursales.php" method="post">
        <!--en capturarFacturas.php vamos a capturar todos los datos ingresados en la tabla -->
        <table border="1">
            <?php foreach ($data as $fila) { ?>

            <tr>
                <td>pk_sucursal</td>
                <td><?php echo $cod ?></td>
            </tr>
            <tr>
                <td>nombre</td>
                <td><input type="text" name="txtnombre" value="<?php echo $fila["nombre"]; ?>" /></td>
            </tr>
            <tr>
                <td>direccion</td>
                <td><input type="text" name="txtdireccion" value="<?php echo $fila["direccion"]; ?>" /></td>
            </tr>
            <tr>
                <td>fk_barrio</td>
                <td><input type="text" name="txtfk_barrio" value="<?php echo $fila["fk_barrio"]; ?>" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="INSERTAR" /></td>
            </tr>
            <?php } ?>
        </table>
        <input type="hidden" name="funcion" value="modificar" />
        <input type="hidden" name="cod" value="<?php echo $cod; ?>" />
    </form>
</body>

</html> 