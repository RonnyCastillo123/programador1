<?php
//incluye la clase Usuario y CrudUsuario
	require_once('crud_usuario.php');
	require_once('usuario.php');
	$crud= new CrudUsuario();
	$usuario=new Usuario();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$usuario=$crud->obtenerUsuario($_GET['id']);
?>
<html>
<head>
	<title>Actualizar Usuario</title>
</head>
		<link rel="stylesheet" type="text/css" href="css/normalize.css"> <!-- llamar al normalize-->
	<link href="https://fonts.googleapis.com/
	css2?family=Krub:ital,wght@0,700;1,400&display=swap" rel="stylesheet"> <!--Fuentes de Google -->
	<link rel="stylesheet" type="text/css" href="css/actualizar.css"> <!--Llamar a estilos.css -->
<body>

	<main class="contenedor sombra" >
        <h2></h2>
        <div class="servicios">

          <section class="servicio">
          	  
          <div class="iconos"><!-- la etiqyeta div contiene a los iconos -->
    

	<form action='administra_usuario.php' method='post'>
	<table class="tabla1" >
		<tr>
			<input type='hidden' name='id' value='<?php echo $usuario->getId()?>'>
			<td><strong> Nombres de Usuario:</strong></td>
			<td> <input type='text' name='nombres' value='<?php echo $usuario->getNombres()?>'></td>
		</tr>
		<tr>
			
			<td><strong>Apellidos de Usuario:</strong></td>
			<td> <input type='text' name='apellidos' value='<?php echo $usuario->getApellidos()?>'></td>
		</tr>
		<tr>
			<td><strong>Telefono:</strong></td>
			<td><strong><input type='text' name='telefono' value='<?php echo $usuario->getTelefono()?>' ></td>
		</tr>
		<tr>
			<td><strong>Correo:</strong></td>
			<td><input type='text' name='correo' value='<?php echo $usuario->getCorreo() ?>'></td>
		</tr>
		<tr>
			<td><strong>Mensaje:</strong></td>
			<td><input type='text' name='mensaje' value='<?php echo $usuario->getMensaje() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value='actualizar'>
	</table>
	

</div>
</section>
 <section class="servicio">
<input class="iconos2 " type='submit' value='Guardar'>
<p></p>
	<a class="iconos2" href="mostrar.php">Volver</a>
	</section>
  </div>
        
      </main>

</form>
</body>
</html>