<?php //require("seguridad.php"); ?>
<?php
function Obtfec()
{
	date_default_timezone_set("Mexico/General");
	$dia=date('j');
	if ($dia<=10)
	{	
		$fecha = date('Y-m-j');
		$nuevafecha = strtotime ( '-1 day' , strtotime ( $fecha ) ) ;
		$nuevafecha = date ( 'Y-m-0j' , $nuevafecha );
		echo "$nuevafecha";
	}else
	{
		$fecha = date('Y-m-j');
		$nuevafecha = strtotime ( '-1 day' , strtotime ( $fecha ) ) ;
		$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
		echo "$nuevafecha";
	}
}
?>
<!DOCTYPE html> 
<html> 
	<head>
		<title>Horizonte</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, user-scalable=no"/>
		<script src="http://localhost/nueva/encuestas/assets/js/jquery.min.js"></script>
	    <!--script type="text/javascript" charset="utf-8" language="JavaScript" charset="ISO-8859-1" src="../js/jquery.dataTables.js"></script-->
		<!--script type="text/javascript" charset="utf-8" language="JavaScript" charset="ISO-8859-1" src='../js/funcion.js'></script-->
		<script type="text/javascript" charset="utf-8" language="JavaScript" charset="ISO-8859-1" src="../js/validaform.js"></script>
		<!--link rel="stylesheet" href="../css/datatables.css"-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="http://localhost/nueva/encuestas/assets/css/styles-home.css">
		<link rel="stylesheet" href="http://localhost/nueva/encuestas/assets/css/material.min.css" />
		<script src="http://localhost/nueva/encuestas/assets/js/material.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<!--link rel="stylesheet" type="text/css" href="../css/menu.css">
    	<link rel="icon" type="image/ico" href="../img/favico.png"-->
		<style type="text/css">
			* header,footer  { background-color: <?php echo $username; ?> ; }
		</style>
		<script>
		/*var brw = new Browser();
		if (brw.name != 'chrome')
		{
			$(function()
			{
				$( "#fecha" ).datepicker();
				//$( "#fecha2" ).datepicker();
			});
		}*/
	  </script>
	</head> 
	<body>
		<?php //echo print_r($_SESSION['userSession']); ?>
		<div id="contenedor"> 
			<!-- Contenedor general de la página -->
			<div id="principal"> 
				<!-- Contenido de la pagina -->
				<header>
					<div class="logo">
						<a onClick="location.href='http://localhost/nueva/encuestas/index.php/home'"><img src="http://localhost/nueva/encuestas/assets/img/logoEH.jpeg" alt="hz"/></a>
					</div>
					<div class="titular">
						<h1 class="titulo">EH: El Horizonte</h1>
						<label>Bienvenido: <?php echo $username; ?></label>
						<div>
							<!--a class="version" onclick="version();" href="javascript:;"><strong>Versión 2.0 </strong><span class="movil">Móvil</span></a-->
						</div>
					</div>
					<div class="usuario">
						<!--li><a id="perfil" class="perfil" onClick="location.href='perfil.php'"></a></li>
						<li><a class="salir" onClick="location.href='../php/salir.php'"></a></li-->
						<button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon">
					  			<i class="material-icons">more_vert</i>
						</button>
						<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
							<li class="mdl-menu__item">Perfil</li>
							<!--li class="mdl-menu__item">Another Action</li>
							<li disabled class="mdl-menu__item">Disabled Action</li-->
							<li class="mdl-menu__item">Cerrar Sesión</li>
						</ul>
					</div>
				</header>
				<nav>
					<ul class="menu">
						<li><a href="http://localhost/nueva/encuestas/index.php/home">Inicio</a></li>
						<li><a href="#">Preferencias</a></li>
						<li><a href="http://localhost/nueva/encuestas/index.php/usuarios">Usuarios</a></li>
						<li><a href="#">Ticktes</a></li>
						<li><a href="#">Estadisticas</a></li>
					</ul>
				</nav>
			</div> 
			
					