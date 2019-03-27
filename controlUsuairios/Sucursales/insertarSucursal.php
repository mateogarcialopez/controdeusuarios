
<html>
    <head>
        <meta charset="UTF-8">
        <title>Insertar Sucursal</title>
    </head>
    <body>
        <h1>Insertar Sucursal</h1>
        <form action="capturarSucursal.php" method="post">
        <table border=1>
            <tr>
                <td>NIT_Sucursal</td>
                <td><input  type="text" name="txt_nit_suc" /> </td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input  type="text" name="txt_nombreSuc" /></td>
            </tr>
            <tr>
                <td>ID Barrio</td>
                <td><input  type="text" name="txt_fkBarrioSuc" /></td>
            </tr>
            <tr>
                <td>Direccion</td>
                <td><input  type="text" name="txt_direccionSuc" /></td>
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
