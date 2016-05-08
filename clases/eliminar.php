<?php
	$idP = $_POST['idP'];

	require ('conexion.php');
	$con = Conectar();
	$sql = 'DELETE FROM datos WHERE id=:idPersona ';
	$q = $con->prepare($sql);
	$q->execute(array(':idPersona'=>$idP));
?>
