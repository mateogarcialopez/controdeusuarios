
<html>
    <head>
        <meta charset="UTF-8">
        <title>Insertar Factura</title>
    </head>
    <body>
        <h1>Insertar Fatura</h1>
        <form action="capturarFactura.php" method="post">
            <table border=1>
                <tr>
                    <td>ID_Factura</td>
                    <td><input  type="text" name="txt_ID_Fac" /> </td>
                </tr>
                <tr>
                    <td>Fecha</td>
                    <td><input  type="text" name="txt_fechaFac" /></td>
                </tr>
                <tr>
                    <td>ID Cajero</td>
                    <td><input  type="text" name="txt_fkCaj" /></td>
                </tr>
                <tr>
                    <td>IVA</td>
                    <td><input  type="text" name="txt_iva" /></td>
                </tr>
                <tr>
                    <td>Descuento</td>
                    <td><input  type="text" name="txt_desc" /></td>
                </tr>
                <tr>
                    <td>Cedula del Cliente</td>
                    <td><input  type="text" name="txt_fkCli" /></td>
                </tr>           
                <tr>
                    <td align="center" colspan="2">
                        <input  type="submit" value="Insertar" /> 
                    </td>
                </tr>
            </table>
        </form>

    </body>
</html>
