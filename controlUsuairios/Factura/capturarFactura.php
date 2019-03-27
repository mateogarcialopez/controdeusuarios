<?php

require "../controlDB.php";
$funcion = $_REQUEST["funcion"];
$parametro = $_GET["parametro"];

if ($funcion != "eliminar") {

//cuando la informacion se envie de la tabla modificar, se realizara esta consulta
    $id = $_POST["id"];
    
    $pkFac = $_POST["txt_ID_Fac"];
    $fechaFac = $_POST["txt_fechaFac"];
    $fkCajFac = $_POST["txt_fkCaj"];
    $ivaFac = $_POST["txt_iva"];
    $descFac = $_POST["txt_desc"];
    $fkCliFac = $_POST["txt_fkCli"];
  
}

//Instancia de controlDB
$obj = new controlDB();

if ($funcion=="modificar") {
    $sql = "update public.\"tbl_factura\" set \"fecha\"='$fechaFac' , \"fk_cajero\"=$fkCajFac, \"iva\"=$ivaFac ,
        \"descuento\"=$descFac, \"fk_cliente\"='$fkCliFac' where \"pk_factura\"=$id";
    $obj->insertar($sql);
} else if ($funcion=="eliminar") {
    $sql = "delete from public.\"tbl_factura\" where \"pk_factura\"='$parametro'";
} else {
    $sql = "INSERT INTO \"tbl_factura\" (\"pk_factura\", \"fecha\", \"fk_cajero\", \"iva\", \"descuento\", \"fk_cliente\")
           VALUES ('$pkFac','$fechaFac', $fkCajFac, $ivaFac, $descFac, $fkCliFac);";
}
$obj->insertar($sql);
header("location: listarFacturas.php");
?>