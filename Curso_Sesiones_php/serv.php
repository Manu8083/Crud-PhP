<?php
	$conect = @mysql_connect("localhost","root","root") or die("No se encontró el servidor");
	mysql_select_db("crud",$conect)or die("No se encontró la base de datos");
?>
