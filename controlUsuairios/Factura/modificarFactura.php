<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar Articulo</title>
    </head>
    <body>

        <?php
        $id = $_GET["parametro"];
        require "../controlDB.php";
        $obj = new controlDB();
        $data = $obj->consultar("SELECT * FROM public.\"tbl_factura\" where \"pk_factura\"='$id' ");
        ?>

        <h2>Modificar Articulo</h2>
        <hr />
        <form action="capturarFactura.php" method="post">
            <table border=1>
                <?php foreach ($data as $filas) { ?>
                    <tr>
                        <td>ID_Articulo</td> 
                        <td><?php echo $id; ?></td>
                    </tr>
                    <tr>
                        <td>Fecha</td>
                        <td><input  type="text" name="txt_fechaFac" value="<?php echo $filas["fecha"]; ?>" /></td>
                    </tr>
                    <tr>
                        <td>ID Cajero</td>
                        <td><input  type="text" name="txt_fkCaj" value="<?php echo $filas["fk_cajero"]; ?>" /></td>
                    </tr>
                    <tr>
                        <td>IVA</td>
                        <td><input  type="text" name="txt_iva" value="<?php echo $filas["iva"]; ?>" /></td>
                    </tr>
                    <tr>
                        <td>Descuento</td>
                        <td><input  type="text" name="txt_desc" value="<?php echo $filas["descuento"]; ?>" /></td>
                    </tr>
                    <tr>
                        <td>Cedula del Cliente</td>
                        <td><input  type="text" name="txt_fkCli" value="<?php echo $filas["fk_cliente"]; ?>" /></td>
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


