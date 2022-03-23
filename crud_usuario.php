<?php
// incluye la clase Db
require_once('conexion.php');
//require_once('login.php');
 
	class CrudUsuario{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo usuario
		public function insertar($usuario){
			$db=Db::conectar();
		$insert=$db->prepare('INSERT INTO usuario values(NULL,:nombres,:apellidos,:telefono,:correo,:mensaje)');
			$insert->bindValue('nombres',$usuario->getNombres());
			$insert->bindValue('apellidos',$usuario->getApellidos());
			$insert->bindValue('telefono',$usuario->getTelefono());
			$insert->bindValue('correo',$usuario->getCorreo());
			$insert->bindValue('mensaje',$usuario->getMensaje());
			$insert->execute();
 
		}
 
		// método para mostrar todos los usuarios
		public function mostrar(){
			$db=Db::conectar();
			$listaUsuarios=[];
			$select=$db->query('SELECT * FROM usuario');
 
			foreach($select->fetchAll() as $usuario){
				$myUsuario= new Usuario();
				$myUsuario->setId($usuario['id']);
				$myUsuario->setNombres($usuario['nombres']);
				$myUsuario->setApellidos($usuario['apellidos']);
				$myUsuario->setTelefono($usuario['telefono']);
				$myUsuario->setCorreo($usuario['correo']);
				$myUsuario->setMensaje($usuario['mensaje']);
				$listaUsuarios[]=$myUsuario;
			}
			return $listaUsuarios;
		}
 
		// método para eliminar un usuario, recibe como parámetro el id del usuario
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM usuario WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
 
		// método para buscar un usuario, recibe como parámetro el id del usuario
		public function obtenerUsuario($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM usuario WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$usuario=$select->fetch();
			$myUsuario= new Usuario();
			$myUsuario->setId($usuario['id']);
			$myUsuario->setNombres($usuario['nombres']);
			$myUsuario->setApellidos($usuario['apellidos']);
			$myUsuario->setTelefono($usuario['telefono']);
			$myUsuario->setCorreo($usuario['correo']);
			$myUsuario->setMensaje($usuario['mensaje']);
			return $myUsuario;
		}
 
		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($usuario){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE usuario SET nombres=:nombres, apellidos=:apellidos, telefono=:telefono,correo=:correo, mensaje=:mensaje  WHERE ID=:id');
			$actualizar->bindValue('id',$usuario->getId());
			$actualizar->bindValue('nombres',$usuario->getNombres());
			$actualizar->bindValue('apellidos',$usuario->Apellidos());
			$actualizar->bindValue('telefono',$usuario->getTelefono());
			$actualizar->bindValue('correo',$usuario->getCorreo());
			$actualizar->bindValue('mensaje',$usuario->getMensaje());
			$actualizar->execute();
		}
	}
?>