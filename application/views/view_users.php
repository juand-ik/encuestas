<?php include_once "cabecerainc.php"; ?>
<style>
.result {
    width: 90%;
    background-color: white;
    margin: 0 auto;
	box-shadow: 0px 3px 30px #333;
}
</style>
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
</style>
<?php include_once "cabecerainc.php"; ?>
<style>
.result {
    width: 90%;
    background-color: white;
    margin: 0 auto;
	box-shadow: 0px 3px 30px #333;
}
</style>

<div class="main-container">
	<div class="card-layout">
		<a href="home/logout">Logout</a>
		<h1>Suscriptores</h1>
		<div class="result">
				<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Domicilio</th>
                <th>Tipo</th>
                <th>Fecha de Registro</th>
                <th>Fecha de actualización</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Juan</td>
                <td>Arquitecto de sistemas</td>
                <td>Monterrey</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Rocio</td>
                <td>Sistemsa</td>
                <td>Monterrey</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Arely</td>
                <td>Programador Junior</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Aza</td>
                <td>Diseñador</td>
                <td>Mexico</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>Airi</td>
                <td>Contador</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>Ricardo</td>
                <td>Integracion</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>Alberto</td>
                <td>Ventas</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td>Diana</td>
                <td>Comercial</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
            </tr>
        </tbody>
		</table>
	</div>
	</div>
</div>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<a href="http://localhost/encuestas/index.php/usuarios/nuevo">Nuevo</a>