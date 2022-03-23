<?php
	class Usuario{
		private $id;
		private $nombres;
		private $apellidos;
		private $telefono;
		private $correo;
		private $mensaje;
 
		function __construct(){}
 
		public function getNombres(){
		return $this->nombres;
		}
 
		public function setNombres($nombres){
			$this->nombres = $nombres;
		}

		public function getApellidos(){
		return $this->apellidos;
		}
 
		public function setApellidos($apellidos){
			$this->apellidos = $apellidos;
		}
 
		public function getTelefono(){
			return $this->telefono;
		}
 
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
 
		public function getCorreo(){
		return $this->correo;
		}
 
		public function setCorreo($correo){
			$this->correo = $correo;
		}
		public function getMensaje(){
		return $this->mensaje;
		}
 
		public function setMensaje($mensaje){
			$this->mensaje = $mensaje;
		}
		public function getId(){
			return $this->id;
		}
 
		public function setId($id){
			$this->id = $id;
		}
	}
?>