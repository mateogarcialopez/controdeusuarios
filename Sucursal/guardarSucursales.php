<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Sucursales</title>
</head>

<body>
    <h2> INSERTAR Sucursales </h2>


    <form action="capturarSucursales.php" method="post"> <!--en capturarFacturas.php vamos a capturar todos los datos ingresados en la tabla --> 
        <table border="1">
            <tr>
                <td>pk_sucursal</td>
                <td><input type="text" name="txtpksucursal" /></td>
            </tr>
            <tr>
                <td>nombre</td>
                <td><input type="text" name="txtnombre" /></td>
            </tr>
            <tr>
                <td>direccion</td>
                <td><input type="text" name="txtdireccion" /></td>
            </tr>
            <tr>
                <td>fk_barrio</td>
                <td><input type="text" name="txtfk_barrio" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="INSERTAR" /></td>
            </tr>
        </table>
    </form>

</body>

</html> 