
<html>
    <head>
        <meta charset="UTF-8">
        <title>Insertar Ariculo</title>
    </head>
    <body>
        <h1>Insertar Articulo</h1>
        <form action="capturarArticulo.php" method="post">
        <table border=1>
            <tr>
                <td>ID_Articulo</td>
                <td><input  type="text" name="txt_ID_Art" /> </td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input  type="text" name="txt_nombreArt" /></td>
            </tr>
            <tr>
                <td>Stock</td>
                <td><input  type="text" name="txt_stockArt" /></td>
            </tr>
            <tr>
                <td>Stock Minimo</td>
                <td><input  type="text" name="txt_stockMinArt" /></td>
            </tr>
            <tr>
                <td>Tipo Articulo</td>
                <td><input  type="text" name="txt_TipoArt" /></td>
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
