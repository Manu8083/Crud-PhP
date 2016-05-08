<?php
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$edad = $_POST['edad'];
	$email = $_POST['email'];
	$idP = $_POST['idP'];

	require ('conexion.php');
	$con = Conectar();
	$sql = 'UPDATE  datos SET nombres=:nombres, apellidos=:apellidos, edad=:edad, email=:email WHERE id=:idPersona';
	$q = $con->prepare($sql);
	$q->execute(array(':nombres'=>$nombres, ':apellidos'=>$apellidos, ':edad'=>$edad, ':email'=>$email, ':idPersona'=>$idP));
?>
