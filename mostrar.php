<?php
//incluye la clase Libro y CrudLibro
require_once('crud_usuario.php');
require_once('usuario.php');

$crud=new CrudUsuario();
$usuario= new Usuario();
//obtiene todos los libros con el método mostrar de la clase crud
$listaUsuarios=$crud->mostrar();
?>
 
<html>
<head>
	<title>Mostrar Usuarios</title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css"> <!-- llamar al normalize-->
	<link href="https://fonts.googleapis.com/
	css2?family=Krub:ital,wght@0,700;1,400&display=swap" rel="stylesheet"> <!--Fuentes de Google -->
	<link rel="stylesheet" type="text/css" href="css/mostrarusuario.css"> <!--Llamar a estilos.css -->
</head>
<body>

	 <main class="contenedor sombra" >
        <h2></h2>
        <div class="servicios">

          <section class="servicio">
          	  
          <div class="iconos"><!-- la etiqyeta div contiene a los iconos -->
          <div>

	 <H1 class ="titulo"> Lista de comentarios de clientes<span class="titulo2"> </span></H1>
	<table class="tabla1"     BORDER=2 >
		<thead class="titulotabla">
			<th><strong>Nombres</strong></th>
			<th><strong>Apellidos</strong></th>
			<th><strong>Telefono</strong></th>
			<th><strong>Correo</strong></th>
			<th><strong>Mensaje</strong></th>
			<th><strong>Actualizar</strong></th>
			<th><strong>Eliminar</strong></th>
		</thead>
		<body>
			<?php foreach ($listaUsuarios as $usuario) {?>
			<tr >
				<td><?php echo $usuario->getNombres() ?></td>
				<td><?php echo $usuario->getApellidos() ?></td>
				<td><?php echo $usuario->getTelefono() ?></td>
				<td><?php echo $usuario->getCorreo()?> </td>
				<td><?php echo $usuario->getMensaje()?> </td>
				<td><a  href="actualizar.php?id=<?php echo $usuario->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="administra_usuario.php?id=<?php echo $usuario->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table>
	


 </div>
	 </section>
	   <section class="servicio">
<a class="iconos2" href="index.php">Volver</a>
 </section>
  </div>
        
      </main>
</body>
</html>