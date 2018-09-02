<?php
    $Servidor = "localhost";
	$Usuario = "id6858673_menuses";
	$Clave = "lolitofdez";
	$BaseDatos = "id6858673_menus";

	$Conexion = new mysqli($Servidor, $Usuario, $Clave, $BaseDatos) or die("NO HAY CONEXION CON EL SERVER");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Foro</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.css">
	<link rel="stylesheet" type="text/css" href="materialize/css/estilos_nuestros.css">
  <link rel="shortcut icon" href="https://www.ull.es/wp-content/themes/base-ull/assets/images/favicon/favicon.ico">
</head>
<body>

		<!-- Cabecera -->
		<nav class="navbar-fixed" role="navigation" aria-label="main-menu">
		    <div class="nav-wrapper">
		      	<div><a href="principal.html" class="brand-logo">Cafeterías ULL</a></div>
		      	<ul class="right" role="menu">
		        	<li role="none"><a role="menuitem" href="cafeterias.html"><i class="material-icons left">view_module</i>Cafeterias</a></li>
		        	<li role="none"><a role="menuitem" href="foro.php"><i class="material-icons left">chat_bubble_outline</i>Foro</a></li>
		        	<li role="none"><a role="menuitem" href="contacto.html"><i class="material-icons left">email</i>Contacto</a></li>
		        	<li role="none"><a role="menuitem" href="index.html"><i class="material-icons left">account_circle</i>Cerrar sesión</a></li>
		      	</ul>
		    </div>
	  </nav>

		<!-- Breadcrumbs -->
		<nav role="navigation" aria-label="breadcrumbs">
    		<div class="nav-wrapper" aria-label="breadcrumbs">
      			<div class="col s12">
        			<a href="principal.html" class="breadcrumb">Inicio</a>
        			<a href="foro.php" class="breadcrumb">Foro</a>
      			</div>
    		</div>
  		</nav>
		<!-- Breadcrumbs -->
		
		<div class="container" role="main">
		    
		    <div class="color-ull-2 formulario2" role="form">
    	      	<div>
    	      	<form action="php/insertarforo.php" method="post" class="col s12">
    		      <h5 tabindex="0">Déjanos tu opinión</h5><hr />
    		      <div class="row">
		            <div class="input-field col s12">
	        			<input id="first_name" type="text" class="validate" name="first_name" aria-required="true">
	        			<label for="first_name">Nombre</label>
	       			</div>
    			    <div class="input-field col s12">
    			    	<textarea id="textarea1" class="materialize-textarea" name="mensaje" aria-required="true"></textarea>
    			        <label for="textarea1">Escribe aquí</label>
    			    </div>
    			  </div>
    			  <button class="btn waves-effect waves-light color-ull" type="submit" name="_enviar">Enviar
    				    <i class="material-icons right">send</i>
    			  </button>
    		    </form>
    	      	</div>
      		</div>
		 
		 	<fieldset class="fset">
		 		
		 		<legend class="legnd">FORO DE CAFETERÍAS ULL</legend>
		 		
		 		<table>
		 		    <thead>
    		 		    <tr>
    		 		        <th>Nombre</th>
    		 		        <th>Mensaje</th>
    		 		    </tr>
    		 		</thead>
		 		    
		 		    <?php
		 		    
		 		        $SQL = "SELECT * FROM Foro";
                        $Result = $Conexion->query($SQL);
		 		        
		 		        while($mostrar=mysqli_fetch_array($Result)){
		 		    
		 		    ?>
		 		    
		 		    <tbody>
    		 		    <tr tabindex="0">
    		 		        <td ><?php echo $mostrar['Nombre'] ?></td>
    		 		        <td><?php echo $mostrar['Mensaje'] ?></td>
    		 		    </tr>
    		 		</tbody>
		 		    
		 		    <?php
		 		        }
		 		    ?>
		 		    
		 		</table>
		 		
		 		
		 	</fieldset>
		 	
		 </div>

		<!-- Footer -->
	  	<footer class="page-footer" role="contentinfo">
          	<div class="container">
            	<div class="row">
              		<div class="col l6 s12">
                		<h5 class="white-text">Información adicional</h5>
                		<p class="grey-text text-lighten-4">
                    Ésta página fue ideada en principio como una trabajo de Usabilidad y Accesibilidad. En el caso de que se quiera mejorar en el futuro, ya tomaremos cartas en el asunto.
                    </p>
              		</div>
              		<div class="col l4 offset-l2 s12">
                		<h5 class="white-text">Links de interés</h5>
                		<ul>
                			<li><a class="grey-text text-lighten-3" href="https://www.ull.es" target="_blank"> · Universidad de la Laguna</a></li>
                      		<li><a class="grey-text text-lighten-3" href="https://www.ull.es/grados/ingenieria-informatica/" target="_blank"> · Ingeniería Informática</a></li>
                		</ul>
              		</div>
            	</div>
          	</div>
          	<div class="footer-copyright">
            	<div class="container">
            		© 2018 Copyright - Grupo 10 (Usabilidad y Accesibilidad)
                <a class="grey-text text-lighten-4 right" href="http://www.mapama.gob.es/es/" target="_blank">Ministerio de Alimentación</a>
            	</div>
          	</div>
        </footer>
		<!-- Footer -->
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
      	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>


</body>
</html>
