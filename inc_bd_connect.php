<?php 
//Conexión a la base de datos destino (bd_sigad_v4_duplicado)
	$connect = pg_connect("host=localhost dbname=XXXXX user=XXXXXX password =XXXXX");
	if ($connect) { // si la conexion fue exitosa
		
		print "OK ->La base de datos alumno  est&aacute;  conectada<br/>";		
	} else{
		print "ERROR ->No se logr&oacute; conectar a la base de datos, consulte al administrador del sistema.<br/>";
	}
?>
