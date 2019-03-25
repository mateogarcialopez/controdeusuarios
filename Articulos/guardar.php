<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2> Insertar Articulos </h2>
    <hr/>
  

    <form action="capturar.php" method="post">
    <table border="1">
    <tr>
        <td>pk Articulo</td>
        <td><input type="text" name="txtpkarticulo" /></td>
    </tr>
    <tr>
        <td>Descripcion</td>
        <td><input type="text" name="txtdescripcionarticulo" /></td>
    </tr>
    <tr>
        <td>Stock</td>
        <td><input type="text" name="txtstokcarticulo" /></td>
    </tr>
    <tr>
        <td>Stock Minimo</td>
        <td><input type="text" name="txtstockminarticulo" /></td>
    </tr>
    <tr>
        <td>fk Tipo Articulo</td>
        <td><input type="text" name="txttipoartarticulo" /></td>
    </tr>
    <tr>
     <td colspan="2" align="center" ><input type="submit" value="INSERTAR"/></td>
    </tr>
    </table>
    </form>
</body>
</html>