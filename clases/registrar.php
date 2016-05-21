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

	if ($nombres == "" or $apellidos == "" or $edad == "" or $email == "") {
		$response = "Debes completar los campos";
	}
	if (strlen($nombres) > 3) {
		$response = "El nombre debe tener minimo 3 caracteres";
	}
	if (strlen($apellidos) > 3) {
		$apellidos = "El nombre debe tener minimo 3 caracteres";
	}
	if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$response = "El email no es valido";
	}
	if (empty($response)) {
		echo "los datos son validos";
	}else {
		foreach ($response as $r) {
			echo "Errores".$r."<br>	";
		}
	}

	}
 ?>
