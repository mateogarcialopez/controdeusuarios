<?php
require "../class/conexionMSQL.php";

$funcion=$_REQUEST["funcion"];
$p=$_GET["p"];

if($funcion!="eliminar"){

    $cod = $_POST["cod"];
    $pkfactura = $_POST["txtpkfactura"]; //en esta parte se almacenan los datos enviados del formulario
    $fecha = $_POST["txtfecha"];
    $iva = $_POST["txtiva"];
    $descuento = $_POST["txtdescuento"];
    $fkcliente = $_POST["txtfkcleinte"];
    $fkfcajero = $_POST["txtfkcajero"];

}



$obj = new conexionMSQL(); //instanciamos la conexion con la base de datos


if ($funcion=="modificar") {
    $sql="UPDATE tbl_factura SET fecha='$fecha', iva='$iva', descuento='$descuento', fk_cliente='$fkcliente', fk_cajero='$fkfcajero' WHERE pk_factura=$cod";
} else if ($funcion=="eliminar") {
    $sql="DELETE FROM tbl_factura WHERE pk_factura='$p'";
} else {
    $sql="INSERT INTO tbl_factura (pk_factura,fecha,iva,descuento,fk_cliente,fk_cajero) VALUES('$pkfactura','$fecha','$iva','$descuento','$fkcliente','$fkfcajero');";
}

$obj->actualizarFacturas($sql);
header("location: listarFacturas.php");

?>
 