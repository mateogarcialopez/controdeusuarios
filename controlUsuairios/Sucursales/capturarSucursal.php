<?php

require "../controlDB.php";
$funcion = $_REQUEST["funcion"];
$parametro = $_GET["parametro"];

if ($funcion != "eliminar") {

//cuando la informacion se envie de la tabla modificar, se realizara esta consulta
    $id = $_POST["id"];
    
    $nitSuc = $_POST["txt_nit_suc"];
    $nombreSuc = $_POST["txt_nombreSuc"];
    $fkBarrSuc = $_POST["txt_fkBarrioSuc"];
    $dirSuc = $_POST["txt_direccionSuc"];
   
}

//Instancia de controlDB
$obj = new controlDB();

if ($funcion=="modificar") {
    $sql = "update public.\"tbl_sucursal\" set \"nombre\"='$nombreSuc' , \"fk_barrio\"='$fkBarrSuc', \"direccion\"='$dirSuc' where \"pk_sucursal\"='$id'";
    $obj->insertar($sql);
} else if ($funcion=="eliminar") {
    $sql = "delete from public.\"tbl_sucursal\" where \"pk_sucursal\"='$parametro'";
} else {
    $sql = "INSERT INTO \"tbl_sucursal\" (\"pk_sucursal\", \"nombre\", \"fk_barrio\", \"direccion\")
           VALUES ('$nitSuc','$nombreSuc', '$fkBarrSuc', '$dirSuc');";
}
$obj->insertar($sql);
header("location: listarSucursales.php");
?>