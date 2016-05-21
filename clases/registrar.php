<?php
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$edad = $_POST['edad'];
	$email = $_POST['email'];

	require ('conexion.php');
	$con = Conectar();
	$sql = 'INSERT INTO datos (nombres, apellidos, edad, email) VALUES (:nombres, :apellidos, :edad, :email)';
	$q = $con->prepare($sql);
	$q->execute(array(':nombres'=>$nombres, ':apellidos'=>$apellidos, ':edad'=>$edad, ':email'=>$email));

	if (isset($_POST["submit"])) {
		$nombres = trim(htmlentities(mysql_real_escape_string($_POST["nombres"])));
		$apellidos = trim(htmlentities(mysql_real_escape_string($_POST["apellidos"])));
		$edad = trim(htmlentities(mysql_real_escape_string($_POST["edad"])));
		$email = trim(htmlentities(mysql_real_escape_string($_POST["email"])));

		$response = array();

	}
 ?>
