<?php

require "../controlDB.php";
$funcion = $_REQUEST["funcion"];
$parametro = $_GET["parametro"];

if ($funcion != "eliminar") {

//cuando la informacion se envie de la tabla modificar, se realizara esta consulta
    $id = $_POST["id"];
    $idArt = $_POST["txt_ID_Art"];
    $nombreArt = $_POST["txt_nombreArt"];
    $stockArt = $_POST["txt_stockArt"];
    $stockMinArt = $_POST["txt_stockMinArt"];
    $tipoArt = $_POST["txt_TipoArt"];
}

//Instancia de controlDB
$obj = new controlDB();

if ($funcion=="modificar") {
    $sql = "update public.\"tbl_Articulos\" set \"descripcionArticulo\"='$nombreArt' , \"stockArticulo\"=$stockArt, \"stock_minArticulo\"=$stockMinArt ,
        \"fk_tipoArticulo\"=$tipoArt where \"pk_Articulo\"='$id'";
    $obj->insertar($sql);
} else if ($funcion=="eliminar") {
    $sql = "delete from public.\"tbl_Articulos\" where \"pk_Articulo\"='$parametro'";
} else {
    $sql = "INSERT INTO \"tbl_Articulos\" (\"pk_Articulo\", \"descripcionArticulo\", \"stockArticulo\", \"stock_minArticulo\", \"fk_tipoArticulo\")
           VALUES ('$idArt','$nombreArt', $stockArt, $stockMinArt, $tipoArt );";
}
$obj->insertar($sql);
header("location: listarArticulos.php");
?>