<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar Datos</title>
</head>
<body>
<?php 
$cod=$_GET["parametro"]; //capturamos el codigo(pk_articulos)

require "../class/conexionMSQL.php";
$obj= new conexionMSQL();

$data=$obj->consultar("SELECT * FROM tbl_articulos WHERE pk_articulo=$cod");
?>

<h2> Modificar Datos </h2>
<hr/>

    <form action="capturar.php" method="post">
    <table border="1">
    <?php foreach($data as $fila){  ?>
    
    <tr>
        <td>pk Articulo</td>
        <td><?php echo $cod; ?></td>
    </tr>
    <tr>
        <td>Descripcion</td>
        <td><input type="text" name="txtdescripcionarticulo" value="<?php echo $fila["descripcionArticulo"]; ?>" /></td>
    </tr>
    <tr>
        <td>Stock</td>
        <td><input type="text" name="txtstokcarticulo"   value="<?php echo $fila["stockArticulo"]; ?>" /></td>
    </tr>
    <tr>
        <td>Stock Minimo</td>
        <td><input type="text" name="txtstockminarticulo" value="<?php echo $fila["stock_minArticulo"]; ?>" /></td>
    </tr>
    <tr>
        <td>fk Tipo Articulo</td>
        <td><input type="text" name="txttipoartarticulo" value="<?php echo $fila["fk_tipoArticulo"]; ?>" /></td>
    </tr>
    <tr>
     <td colspan="2" align="center" ><input type="submit" value="GUARDAR"/></td>
    </tr>
    <?php } ?>
    </table>
    <input type="hidden" name="funcion" value="modificar" />
    <input type="hidden" name="cod" value="<?php echo $cod; ?>" />
    </form>

</body>
</html>