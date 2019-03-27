<?php 
require "../class/conexionMSQL.php";

$funcion = $_REQUEST["funcion"];
$p = $_GET["p"];


if ($funcion != "eliminar") {
    $cod = $_POST["cod"];
    $pkarticulo = $_POST["txtpkarticulo"];
    $descripcion = $_POST["txtdescripcionarticulo"];
    $stock = $_POST["txtstokcarticulo"];
    $stockmin = $_POST["txtstockminarticulo"];
    $tipoart = $_POST["txttipoartarticulo"];
}

$obj = new conexionMSQL();

if ($funcion == "modificar") {
    $sql = "UPDATE tbl_articulos SET descripcionArticulo='$descripcion', stockArticulo='$stock', stock_minArticulo='$stockmin', fk_tipoArticulo='$tipoart' WHERE  pk_articulo=$cod";
    $obj->actualizar($sql);
} else if ($funcion == "eliminar") {
    $sql = "DELETE FROM tbl_articulos WHERE pk_articulo='$p'";
    //echo $sql;
} else {
    $x ="SELECT max(pk_articulo)";
   $con=$obj->consultar($x);
    for ($i = $con; $i <= 10000; $i++) {
        $sql = "INSERT INTO tbl_articulos(pk_articulo,descripcionArticulo,stockArticulo,stock_minArticulo,fk_tipoArticulo) VALUES('$pkarticulo','$descripcion','$stock','$stockmin','$tipoart')";
    }
}

$obj->actualizar($sql);
header("location: listar.php");
 