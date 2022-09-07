<?php

    if (isset($_GET["login"])) {
    	$user= $_GET["email"];
    	$pass= $_GET["password"];
    	$con = mysqli_connect("localhost", "adm_webgenerator", "webgenerator2020", "webgenerator");
    	$queryusuario = mysqli_query($con,"SELECT * FROM usuarios WHERE email ='$user' and password = '$pass'");
    	$nr = mysqli_num_rows($queryusuario);

    	if ($nr == 1) {
         
       		session_start();
         	$_SESSION['usuario']=$user;
         	$_SESSION['password']=$pass;

         	header('Location:panel.php');

    	}else{

        	echo"<script>alert('Contraseña o e-mail incorrecto')</script>";

    	}
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log in</title>
</head>
<body>
	<br>
	<br>
	
	<center><h1> webgenerator Federico Bernal </h1>
	<form method="GET">
		<input type="email" name="email" placeholder="email"><br><br>
		<input type="password" name="password" placeholder="contraseña"><br><br>
		<input type="submit" name="login" value="Log in"><br><br>
	</form>

	<a href="register.php">Registrarse</a>

	</center>
</body>
</html>