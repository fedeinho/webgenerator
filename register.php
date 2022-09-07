<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <center>
    	<br>
		<br>
		<br>
        <h1>Registrarse</h1>

        <form method="GET">
            Ingrese un email<br>
            <input type="text" name="email" placeholder="email"><br><br>Ingrese una contraseña<br>
            <input type="password" name="password" placeholder="contraseña"><br><br>Repita la contraseña<br>
            <input type="password" name="password2" placeholder="repetir contraseña"><br><br>
            <input type="submit" name="Registrarse" value="Registrarse"><br><br>
        </form>
        <?php 
        	if (isset($_GET["Registrarse"])) {
        		
        		if ($_GET["password"] == $_GET["password2"]){
            		
            		$fecha= date("Y-m-d H:i:s");

                	$con = mysqli_connect("localhost", "adm_webgenerator", "webgenerator2020", "webgenerator");
                
                	$ssql="INSERT INTO usuarios (idUsuario, email, password, fechaRegistro) VALUES (NULL, '".$_GET["email"] ."', '".$_GET["password"]."', '".$fecha."');";
                
                	$res =mysqli_query($con,$ssql);

                	header('location: http://mattprofe.com.ar:81/alumno/3781/ACTIVIDADES/CLASE_11/login.php');

                }else{
                    echo"<script>alert('Las contraseñas no coinciden')</script>";
                }

        	}
        	

         ?>

        <a href="login.php"> Volver </a>
    </center>
</body>
</html>
