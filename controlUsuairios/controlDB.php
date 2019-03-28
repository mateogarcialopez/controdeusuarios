<?php

session_start();

class controlDB {

    function __construct() {
        $tipousr=$_SESSION['tipo_usr'];
        
        if ($tipousr == "administrador") {
            $host = "host=localhost";
            $port = "port=5432";
            $dbname = "dbname=ControlUsuario";
            $user = "user=postgres";
            $password = "password=postgres";
        } else if ($tipousr == "cajero") {
            $host = "host=localhost";
            $port = "port=5432";
            $dbname = "dbname=ControlUsuario";
            $user = "user=cajero";
            $password = "password=cajero";
        } else if ($tipousr == "supervisor") {
            $host = "host=localhost";
            $port = "port=5432";
            $dbname = "dbname=ControlUsuario";
            $user = "user=supervisor";
            $password = "password=supervisor";
        } else if ($tipousr == "gerente") {
            $host = "host=localhost";
            $port = "port=5432";
            $dbname = "dbname=ControlUsuario";
            $user = "user=gerente";
            $password = "password=gerente";
        }

        //cadena de conexion
        $this->db = pg_connect("$host $port $dbname $user $password") or die("Error en la conexion" . pg_last_error());
    }

    //SELECT
    function consultar($sql) {
        $res = pg_query($this->db, $sql);
        $data = NULL;

        while ($fila = pg_fetch_array($res)) {
            $data[] = $fila;
        }
        return $data;
    }

    //DELETE, UPDATE, INSERT
    function insertar($sql) {
        pg_query($this->db, $sql);
        if (pg_affected_rows($this->db) <= 0) {
            echo "No se pudo insertar el nuevo dato";
        } else {
            echo "Se ha adicionado el producto";
        }
    }

}
