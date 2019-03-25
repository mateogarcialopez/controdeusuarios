<?php
require "../class/conexionMSQL.php";
$pkfactura = $_POST["txtpkfactura"]; //en esta parte se almacenan los datos enviados del formulario
$fecha = $_POST["txtfecha"];
$iva = $_POST["txtiva"];
$descuento = $_POST["txtdescuento"];
$pkcliente = $_POST["txtfkcleinte"];
$pkfcajero = $_POST["txtfkcajero"];

$obj= new conexionMSQL(); //instanciamos la conexion con la base de datos
$sql= "INSERT INTO tbl_factura (pk_factura,fecha,iva,descuento,fk_cliente,fk_cajero) VALUES('$pkfactura','$fecha','$iva','$descuento','$pkcliente','$pkfcajero');";
$datos=$obj->actualizarFacturas($sql); //llamamos al metodo de actualizar que esta en conexionMSQL y se almacena en una variable



?>



