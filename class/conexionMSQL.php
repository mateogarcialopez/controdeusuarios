<?php 
session_start();

//$rol=$_SESSION['tipo_usr'];
//echo "prueba".$rol;

class conexionMSQL
{

    function __construct()
    {

        try {            
             //declarando variable
             $rol=$_SESSION['tipo_usr'];
            if($rol=="cajero"){
                $host = "localhost";
                $db_name = "modeloventas";
                $user = "root";
                $pass = "";
            }else if($rol=="supervisor"){
                $host = "localhost";
                $db_name = "modeloventas";
                $user = "root";
                $pass = "";
            }else if($rol=="administrador"){
                $host = "localhost";
                $db_name = "modeloventas";
                $user = "root";
                $pass = "";
            }else if($rol=="gerente"){
                $host = "localhost";
                $db_name = "modeloventas";
                $user = "root";
                $pass = "";
            }
    
            //cadena de conexion
            $this->con = mysqli_connect($host, $user, $pass) or die("error en la base de datos");
            //seleccion de la base de datos     
            mysqli_select_db($this->con, $db_name) or die("no se ha encontrado la base de datos");
        } catch (Exception $ex) {
            echo $ex;
        }
    }

    function consultar($sql)
    {
        $res = mysqli_query($this->con, $sql);
        $data = null;
        while ($fila = mysqli_fetch_assoc($res)) {

            $data[] = $fila;
        }
        return $data;
    }

    function actualizar($sql)
    {

        mysqli_query($this->con, $sql);
        if (mysqli_affected_rows($this->con) <= 0) {
            echo "no se pudo realizar la actualizacion";
        } else {
            echo "se han realizado los cambios correctamente";
        }
    }

    function consultarFactura($sql)
    {
        $res = mysqli_query($this->con, $sql);
        $data = null;
        while ($fila = mysqli_fetch_assoc($res)) { //mysqli_fetch_assoc: almacena los nombres de las tablas como indices
            $data[] = $fila;
        }
        return $data;
    }

    function actualizarFacturas($sql)
    {
        mysqli_query($this->con, $sql);
        if (mysqli_affected_rows($this->con) <= 0) {  //mysqli_affected_rows: VALIDA CUANDO UN REGISTRO ES AFECTADO
            echo "no se pudo realizar la actualizacion";
        } else {
            echo "se han realizado los cambios correctamente";
        }
    }

    function consultarSucursal($sql)
    {
        $res = mysqli_query($this->con, $sql);
        $data = null;
        while ($fila = mysqli_fetch_assoc($res)) { //mysqli_fetch_assoc: almacena los nombres de las tablas como indices
            $data[] = $fila;
        }
        return $data;
    }

    
    function actualizarSucursal($sql)
    {
        mysqli_query($this->con, $sql);
        if (mysqli_affected_rows($this->con) <= 0) {  //mysqli_affected_rows: VALIDA CUANDO UN REGISTRO ES AFECTADO
            echo "no se pudo realizar la actualizacion";
        } else {
            echo "se han realizado los cambios correctamente";
        }
    }




}
 ?>