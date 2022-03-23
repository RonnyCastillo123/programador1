<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title>Desarrollo web</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css"> <!-- llamar al normalize-->
	<link href="https://fonts.googleapis.com/
	css2?family=Krub:ital,wght@0,700;1,400&display=swap" rel="stylesheet"> <!--Fuentes de Google -->
	<link rel="stylesheet" type="text/css" href="css/estilos.css"> <!--Llamar a estilos.css -->

   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!--predefinir la ventana modal -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
       <H1 class ="titulo"> Página Web Ronny Castillo <span class="titulo2">Desarrollador Web</span></H1>
       <div class="nav-p">
      <nav class="navegacion-p contenedor">
      	  <a href="index.php">Inicio</a>
      	  <a href="sobremi.html">Sobre Mi</a>
      	  <a href="clientes.html">Clientes</a>
      	  <a href="contacto.html">Contactos</a>
          <a href="" data-toggle="modal" data-target="#Modal">Ingresar</a>
      </nav>
      </div>

      <!-- poner section para cada columna de informacion: titulo, imagen vectorizada, texto -->
      <section class="fondo">
      	<div class="contenido-fondo">
      	   <h2>Diseño y Desarrollo</h2>

      	   <!-- Aquí se pone al imagen vectorizada del mapa -->
      	   	   <p><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffec00" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <circle cx="12" cy="11" r="3" />
              <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
              </svg>
           </p>
           <p>Pelileo,Ecuador </p> 

           <a href="#" class="boton">Contactar</a>
           </div>
      </section>




      <main class="contenedor sombra" >
      	<h2>Mis Servicios</h2>
        <div class="servicios">


      	<section class="servicio">
      		<h3>Diseño Web</h3>
      		<div class="iconos"><!-- la etiqyeta div contiene a los iconos -->
      			<p>   				<!-- Traer una imagen vectoriza para el icono de la paleta-->
      				<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-palette" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
 					 <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
 					 <path d="M12 21a9 9 0 1 1 0 -18a9 8 0 0 1 9 8a4.5 4 0 0 1 -4.5 4h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />
 					 <circle cx="7.5" cy="10.5" r=".5" fill="currentColor" />
 					 <circle cx="12" cy="7.5" r=".5" fill="currentColor" />
 					 <circle cx="16.5" cy="10.5" r=".5" fill="currentColor" />
					</svg>
				</div>
					<!-- etiqueta <lorem para tener texto para diseñar -->
					<p> El diseño web implica trabajo relacionado con el layout y diseño de páginas online, así como la producción de contenido, aunque generalmente se aplica a la creación de sitios web.

En este caso, los diseñadores web crean las páginas utilizando lenguajes de marcado como HTML o XML.

Por otro lado, la parte visual de los sitios está a cargo del CSS, término utilizado para estilizar los elementos escritos en HTML.

Por lo tanto, es común que los diseñadores web utilicen ambos para construir un site porque juntos definirán cómo aparecerán las páginas en los navegadores.</p>



      			</p>
      		
      	</section>


      	<section class="servicio">
      		<h3>Aplicaciones Web</h3>
      		<div class="iconos"><!-- El div contiene a las imagenes -->
      				<!-- Traer una imagen vectoriza ANDROID  -->
      				<p> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-android" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
  					<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  					<line x1="4" y1="10" x2="4" y2="16" />
  					<line x1="20" y1="10" x2="20" y2="16" />
  					<path d="M7 9h10v8a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-8a5 5 0 0 1 10 0" />
  					<line x1="8" y1="3" x2="9" y2="5" />
  					<line x1="16" y1="3" x2="15" y2="5" />
  					<line x1="9" y1="18" x2="9" y2="21" />
  					<line x1="15" y1="18" x2="15" y2="21" />
					</svg></p>

					<!-- Traer una imagen vectoriza APLLE -->
      				<p><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-apple" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
  					<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
 					 <path d="M9 7c-3 0 -4 3 -4 5.5c0 3 2 7.5 4 7.5c1.088 -.046 1.679 -.5 3 -.5c1.312 0 1.5 .5 3 .5s4 -3 4 -5c-.028 -.01 -2.472 -.403 -2.5 -3c-.019 -2.17 2.416 -2.954 2.5 -3c-1.023 -1.492 -2.951 -1.963 -3.5 -2c-1.433 -.111 -2.83 1 -3.5 1c-.68 0 -1.9 -1 -3 -1z" />
  					<path d="M12 4a2 2 0 0 0 2 -2a2 2 0 0 0 -2 2" />
					</svg></p>
      				
      				
				</div>
					<!-- -->
					<p> El concepto de aplicaciones web está relacionado con el almacenamiento en la nube. Toda la información se guarda de forma permanente en grandes servidores de internet y  te envían, a tu dispositivo o equipo, los datos que requieres en ese momento, dejando  una copia temporal dentro de tu equipo.</p>



      			
      	</section>

      	<section class="servicio">
      		<h3>E-commerce</h3>
      		<div class="iconos"><!-- El div contiene a las imagenes -->
      				<!-- Traer una imagen vectoriza  CREDIT CARD-->
      				<p> 
      					<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
  						<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  						<rect x="3" y="5" width="18" height="14" rx="3" />
  						<line x1="3" y1="10" x2="21" y2="10" />
  						<line x1="7" y1="15" x2="7.01" y2="15" />
  						<line x1="11" y1="15" x2="13" y2="15" />
						</svg>
      				</p>

				     				
				</div>
					<!-- -->
					<p> Podríamos definir un ecommerce como una tienda virtual. Un método de compraventa que utiliza internet como medio para realizar transacciones y contactar con sus consumidores. No sólo mediante una página web, sino también a través de las redes sociales. Estas suponen una fuente informativa con mucho impacto, y permiten acercarte y conocer más a tu público objetivo.</p>



      			
      	</section>

<!-- section para el fomulario-->


      	<section>
      		 </div>   <!--div para la clase servicios  -->
		<h2>Contacto</h2>


		 <form class="formulario" action="administra_usuario.php" method="post">
	     <fieldset>
	 	   	<legend>CONTACTANOS LLENANDO TODOS LOS CAMPOS </legend>
	 	   	<div class="campo">
	 	   		<label>Nombres</label>
	 	   		<input type="text" placeholder="Nombres" name="nombres">
	 	   	</div>

	 	   	<div class="campo">
	 	   		<label>Apellidos</label>
	 	   		<input type="text" placeholder="Apellidos" name="apellidos">
	 	   	</div>

	 	   	<div class="campo">
	 	   		<label>Telefono</label>
	 	   		<input type="telf" placeholder="Ejm:098765142" name="telefono">
	 	   	</div>


	 	   	<div class="campo">
	 	   		<label>Correo</label>
	 	   		<input type="email"  placeholder="ejemplo@correo.com" name="correo">
	 	   	</div>

			<div class="campo">	 	   	
	 	   		<label>Comentarios/ Sugerencias</label>
	 	   		<input type="text" name="mensaje">
	 	   	</div>

	 	   	 

	 	   	<div class="e-b flex"> <!-- clase e-b para dar estilizado al boton enviar-->
	 	   
          <input type="submit" name="insertar" class="boton bo1"><!-- insertar viene de administar_usuario.php insertar-->

	 	   	</div>

	     	</fieldset>

     	</form>



     </section>




      </main>
      <footer>
      	<p>Todos los derechos reservados 2022 - RC</p>

      </footer>

<!--- VENTANA MODAL--->
<!-- el id = MOdal es igual a la referencia de arriba en el Ingresar-->

  <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ejemploModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ejemploModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="formulario" method="post" action="login.php">
        <fieldset>
          <legend>Ingresar</legend>
          <div class="contenedor-campos">
            <div class="campo">
            <label>Usuario</label>
            <input  class="input-text" type="text" placeholder="Usuario" name="usu">
            </div>
            <div class="campo">
            <label>Contraseña</label>
            <input class="input-text" type="password" placeholder="Contraseña" name="pass">
            </div>
            
          </div>
            <div class="a_d  flex">
              <input class="boton bo1" type="submit" >
            </div>      

        </fieldset>

      </form>
        </div>
        <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>