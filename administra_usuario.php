<?php
//incluye la clase Usuario y Crud_Usuario
require_once('crud_usuario.php');
require_once('usuario.php');
 
$crud= new CrudUsuario();
$usuario= new Usuario();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un usuario
	if (isset($_POST['insertar'])) {
		$usuario->setNombres($_POST['nombres']);
		$usuario->setApellidos($_POST['apellidos']);
		$usuario->setTelefono($_POST['telefono']);
		$usuario->setCorreo($_POST['correo']);
		$usuario->setMensaje($_POST['mensaje']);
		//llama a la función insertar definida en el crud
		$crud->insertar($usuario);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el usuario
	}elseif(isset($_POST['actualizar'])){
		$usuario->setId($_POST['id']);
		$usuario->setNombres($_POST['nombres']);
		$usuario->setApellidos($_POST['apellidos']);
		$usuario->setTelefono($_POST['telefono']);
		$usuario->setCorreo($_POST['correo']);
		$usuario->setMensaje($_POST['mensaje']);
		$crud->actualizar($usuario);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un usuario
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>