<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar Sucursal</title>
    </head>
    <body>

        <?php
        $id = $_GET["parametro"];
        
        require "../controlDB.php";
        $obj = new controlDB();
        $data = $obj->consultar("SELECT * FROM public.\"tbl_sucursal\" where \"pk_sucursal\"='$id' ");
        ?>

        <h2>Modificar Articulo</h2>
        <hr />
        <form action="capturarSucursal.php" method="post">
            <table border=1>
                <?php foreach ($data as $filas) { ?>
                    <tr>
                        <td>NIT_Sucursal</td> 
                        <td><?php echo $id; ?></td>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td><input  type="text" name="txt_nombreSuc" value="<?php echo $filas["nombre"]; ?>" /></td>
                    </tr>
                    <tr>
                        <td>ID Barrio</td>
                        <td><input  type="text" name="txt_fkBarrioSuc" value="<?php echo $filas["fk_barrio"]; ?>" /></td>
                    </tr>
                    <tr>
                        <td>Direccion</td>
                        <td><input  type="text" name="txt_direccionSuc" value="<?php echo $filas["direccion"]; ?>" /></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2">
                            <input  type="submit" value="Guardar" /> 
                        </td>
                    </tr>
                <?php } ?>
                <input type="hidden" name="funcion" value="modificar"/>
                <input type="hidden" name="id" value="<?php echo "$id"; ?>"
            </table>

        </form>


    </body>
</html>
