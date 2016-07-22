<?php include_once "cabecerainc.php"; ?>

<?php
	$input_nombre = array
		(
			"name"=>"nombre",
			"class"=>"mdl-textfield__input",
			"type"=>"text",
			"pattern"=>"[A-Z,a-z, ]*",
			"id"=>"sample3",
			"required"=>"true",
		);
	$input_tel = array
		(
			"name"=>"telefono",
			"class"=>"mdl-textfield__input",
			"type"=>"number",
			"id"=>"sample3",
		);
	$input_correo = array
		(
			"name"=>"correo",
			"class"=>"mdl-textfield__input",
			"type"=>"email",
			"id"=>"sample3",
		);
	$input_domicilio = array
		(
			"name"=>"domicilio",
			"class"=>"mdl-textfield__input",
			"type"=>"text",
			"id"=>"sample3",
		);
	$input_cp = array
		(
			"name"=>"domicilio_cp",
			"class"=>"mdl-textfield__input",
			"type"=>"number",
			"id"=>"sample3",
		);
	$input_calle = array
		(
			"name"=>"domicilio_calle",
			"class"=>"mdl-textfield__input",
			"type"=>"text",
			"id"=>"sample3",
		);
	$input_calle2 = array
		(
			"name"=>"domicilio_calle2",
			"class"=>"mdl-textfield__input",
			"type"=>"text",
			"id"=>"sample3",
		);
	$submit_btn = array
		(
			"class"=>"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent",
		);
?>
<style>
.card-layout {
    background-color: white;
    width: 90%;
    margin: 0 auto;
}
.main-container
{
	background-color: #626cbf; /*cornflowerblue;*/
	height: 15em;
	padding-top: 40px;
}
#select-lbl
{
	text-align: center;
}
form {
    padding: 1em;
	/*padding-top: 40px;*/
	padding-top: 1px;
	padding-bottom: 6em;
	height: auto;/*40em;*/
	box-shadow: 0px 6px 20px #333;
}
h1{
    font-size: 35px;
}
.button-frm
{
	margin: 0 auto;
	margin-top: 2em;
	/* background-color: green; */
	width: 80%;
	text-align: center;
	position: absolute;
}
</style>
<div class="main-container">
	<div class="card-layout">
		<div class="form">
			<?php echo validation_errors(); ?>
			<?php echo form_open() ?>
				<h1>Suscriptor</h1>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<label class="mdl-textfield__label" for="sample3">Nombre</label>
					<?php echo form_input($input_nombre) ?>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<label class="mdl-textfield__label" for="sample3">Teléfono</label>
					<?php echo form_input($input_tel) ?>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<label class="mdl-textfield__label" for="sample3">Correo</label>
					<?php echo form_input($input_correo) ?>
				</div>
				
				
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<label class="mdl-textfield__label" for="sample3">Domicilio</label>
					<?php echo form_input($input_domicilio) ?>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<label class="mdl-textfield__label" for="sample3">Código Postal</label>
					<?php echo form_input($input_cp) ?>
				</div>
				
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="select-lbl">
					<label class="mdl-textfield__label" for="sample3" id="select-lbl">Colonia - Ciudad</label><br /><br />
					<?php //echo form_input($input_cp) ?>
					<select name="colonia">
						<option selected disabled>-Seleccione-</option>
						<option value="gp">Guadalupe</option>
						<option value="jz">Juarez</option>
						<option value="mty">Monterrey</option>
						<option value="apd">Apodaca</option>
					</select>
					<select name="Cd">
						<option selected disabled>-Seleccione-</option>
						<option value="gp">Guadalupe</option>
						<option value="jz">Juarez</option>
						<option value="mty">Monterrey</option>
						<option value="apd">Apodaca</option>
				  </select>
				</div>
				
				
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<label class="mdl-textfield__label" for="sample3">Entre Calle</label>
					<?php echo form_input($input_calle) ?>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<label class="mdl-textfield__label" for="sample3">Entre Calle 2</label>
					<?php echo form_input($input_calle2) ?>
				</div>
				
				<!--br />
				<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
					<input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
					<span class="mdl-radio__label">Hombre</span>
				</label>
				<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
					<input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
					<span class="mdl-radio__label">Mujer</span>
				</label><br /-->
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="select-lbl">
					<label class="mdl-textfield__label" for="sample3" id="select-lbl">Sexo - Edad</label><br /><br />
					<?php //echo form_input($input_cp) ?>
				  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
					<input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
					<span class="mdl-radio__label">Hombre</span>
				</label>
				<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
					<input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
					<span class="mdl-radio__label">Mujer</span>
				</label>
				<select name="edad">
					<option value="20">20</option>
					<option value="jz">30 - 40</option><option value="mty">45 - 65</option>
					<option value="apd">+ 65</option>
				</select>
			  </div>
				
				
				<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
					<input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" checked>
					<span class="mdl-checkbox__label">Suscriptor del Periódico Impreso</span>
				</label>
			<div class="button-frm">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<?php echo form_submit("btn_guardar","Guardar",$submit_btn) ?>
				</div>
			</div>
			<?php echo form_close() ?>
		</div>
	</div>
</div>