


<html>
    <head>
        <meta charset="UTF-8">
        <title>Sucursales</title>
        <script>
            function modificar(id){
            
                window.location="http://localhost/controlUsuairios/Sucursales/modificarSucursal.php?parametro="+id;
                
            }
            function eliminar(id){
                window.location="http://localhost/controlUsuairios/Sucursales/capturarSucursal.php?parametro="+id+"&funcion=eliminar";
            }
        </script>
    </head>
    
        <?php
        require "../controlDB.php";
        $obj = new controlDB();
        $datos = $obj->consultar("SELECT * FROM public.\"tbl_sucursal\"");
        ?>
    <h1>Sucursales</h1>
        <table border=1 >
        <tr>
            <td> <a  href="http://localhost/controlUsuairios/menuPrincipal.php" ><img  src="../Views/img/home.png" width="20"  /></a></td>
            <td> <a  href="http://localhost/controlUsuairios/Sucursales/insertarSucursal.php" ><img  src="../Views/img/adc.png" width="20"  /></a></td>
        </tr>
    </table
        <hr />
        <table border=1 >
            <tr>
                <td>NIT</td>
                <td>Nombre</td>
                <td>ID Barrio</td>
                <td>Direccion</td>
                <td align="center" colspan="2">Conf</td>
            </tr>
            <?php foreach ($datos as $filas) { ?> 
                <tr>    
                    <td><?php echo $filas["pk_sucursal"]; ?></td>
                    <td><?php echo $filas["nombre"]; ?></td>
                    <td><?php echo $filas["fk_barrio"]; ?></td>
                    <td><?php echo $filas["direccion"]; ?></td>
                    <td align="center"><img  src="../Views/img/edt.png" width="20" onclick="modificar('<?php echo $filas["pk_sucursal"]; ?>')" /></td>
                    <td align="center"><img  src="../Views/img/del.png" width="20" onclick="eliminar('<?php echo $filas["pk_sucursal"]; ?>')" /></td>
                <tr>
                <?php } ?>
        </table>

    
</html>
