<?php
@$conexion=mysql_connect("mysql.hostinger.com.ar", "u374405290_rami", "Gandalf2") 
or exit("No se pudo establecer una conexión");
@$dbseleccionada=mysql_select_db("u374405290_ram", $conexion)
or exit("No se pudo seleccionar la base de datos");
?>