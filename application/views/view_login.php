<?php
	$input_mail = array
	(
		"type"=>"email",
		"name"=>"input_mail",
		"class"=>"form-control",
		/*"value"=> set_value("input_mail")*/
	);
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Encuestas</title>
	<!--link rel="stylesheet" href="<?php //echo base_url(); ?>assets/css/style-login.css" /-->
	<link rel="stylesheet" href="http://localhost/nueva/encuestas/assets/css/style-login.css" />
	<link rel="stylesheet" href="http://localhost/nueva/encuestas/assets/css/material.min.css" />
	<script src="http://localhost/nueva/encuestas/assets/js/material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
	<div class="form-box">
		<div class="head">Encuestas</div>
		<!--form action="#" id="login-form"-->
		<form action="http://localhost/encuestas/index.php/verifylogin" id="login-form" method="POST">
		<?php //echo form_open('verifylogin'); ?>
			<div class="form-group">
				<!--label class="label-control">
					<span class="label-text">Email</span>
				</label-->
				<!--input type="email" name="email" class="form-control mdl-textfield__input" /-->
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" name="username" type="text" id="sample3">
				    <label class="mdl-textfield__label" for="sample3">Correo</label>
				</div>
			</div>
			<div class="form-group">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" name="password" type="password" id="sample3">
				    <label class="mdl-textfield__label" for="sample3">Password</label>
				</div>
			</div>
			<input type="submit" value="Iniciar" class="btn" />
			<p class="text-p">Olvidaste tu contraseña? <a href="#">recuperar</a> </p>
		</form>
	</div>

</body>
</html>
