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
        $data = $obj->consultar("SELECT * FROM public.\"tbl_Articulos\" where \"pk_Articulo\"='$id' ");
        ?>

        <h2>Modificar Articulo</h2>
        <hr />
        <form action="capturarArticulo.php" method="post">
            <table border=1>
                <?php foreach ($data as $filas) { ?>
                    <tr>
                        <td>ID_Articulo</td> 
                        <td><?php echo $id; ?></td>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td><input  type="text" name="txt_nombreArt" value="<?php echo $filas["descripcionArticulo"]; ?>" /></td>
                    </tr>
                    <tr>
                        <td>Stock</td>
                        <td><input  type="text" name="txt_stockArt" value="<?php echo $filas["stockArticulo"]; ?>" /></td>
                    </tr>
                    <tr>
                        <td>Stock Minimo</td>
                        <td><input  type="text" name="txt_stockMinArt" value="<?php echo $filas["stock_minArticulo"]; ?>" /></td>
                    </tr>
                    <tr>
                        <td>Tipo Articulo</td>
                        <td><input  type="text" name="txt_TipoArt" value="<?php echo $filas["fk_tipoArticulo"]; ?>" /></td>
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
