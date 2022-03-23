<?php

$bdhost = "localhost";
$bduser = "root";
$bdpass = "";
$bdname = "contacto";

$conn = mysqli_connect($bdhost, $bduser, $bdpass, $bdname);
if (!$conn) {
	die("No existe conexión con la base de Datos: ".mysqli_connect_error());

}

	$nombre = $_POST['usu'];
	$password = $_POST['pass'];

	$query = mysqli_query($conn, "SELECT * FROM login WHERE usuario ='".$nombre."' and password = '".$password."'");
	$nr = mysqli_num_rows($query);


	if ($nr==1){
		header('Location: mostrar.php');
		/*echo "Bienvenido: " .$nombre; */
		
	}elseif ($nr==0) {
		header("Location: index.php");
		echo "Datos Erróneos";
		
	}

?>