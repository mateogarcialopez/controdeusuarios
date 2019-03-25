<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Factura</title>
</head>

<body>
    <h2> INSERTAR FACTURAS </h2>


    <form action="capturarFacturas.php" method="post"> <!--en capturarFacturas.php vamos a capturar todos los datos ingresados en la tabla --> 
        <table border="1">
            <tr>
                <td>pk Factura</td>
                <td><input type="text" name="txtpkfactura" /></td>
            </tr>
            <tr>
                <td>Fecha</td>
                <td><input type="text" name="txtfecha" /></td>
            </tr>
            <tr>
                <td>iva</td>
                <td><input type="text" name="txtiva" /></td>
            </tr>
            <tr>
                <td>Descuento</td>
                <td><input type="text" name="txtdescuento" /></td>
            </tr>
            <tr>
                <td>fk Cliente</td>
                <td><input type="text" name="txtfkcleinte" /></td>
            </tr>
            <tr>
                <td>fk Cajero</td>
                <td><input type="text" name="txtfkcajero" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="INSERTAR" /></td>
            </tr>
        </table>
    </form>

</body>

</html> 