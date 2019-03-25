<?php
require "../class/conexionMSQL.php";

$funcion=$_REQUEST["funcion"];
$p=$_GET["p"];

if($funcion!="eliminar"){

    $cod=$_POST["cod"];
    $pk_sucursal = $_POST["txtpksucursal"]; //en esta parte se almacenan los datos enviados del formulario
    $nombre = $_POST["txtnombre"];
    $direccion = $_POST["txtdireccion"];
    $fk_barrio = $_POST["txtfk_barrio"];
}



$obj = new conexionMSQL(); //instanciamos la conexion con la base de datos


if ($funcion=="modificar") {
    $sql="UPDATE tbl_sucursal SET nombre='$nombre', direccion='$direccion', fk_barrio='$fk_barrio' WHERE pk_sucursal=$cod";
} else if ($funcion=="eliminar") {
    $sql="DELETE FROM tbl_sucursal WHERE pk_sucursal='$p'";
} else {
    $sql="INSERT INTO tbl_sucursal (pk_sucursal,nombre,direccion,fk_barrio) VALUES('$pk_sucursal','$nombre','$direccion','$fk_barrio');";
}

$obj->actualizarSucursal($sql);
header("location: listarSucursales.php");

?>

 