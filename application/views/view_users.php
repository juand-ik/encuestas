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
		<div class="details">
			<h2>Usuarios</h2>
			<div class="result">
				<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Posicion</th>
                <th>Oficina</th>
                <th>Edad</th>
                <th>Fecha de Entrada</th>
                <th>Salario</th>
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
<a href="home/logout">Logout</a>
<!--script src="http://localhost/nueva/encuestas/assets/js/jquery.dataTables.js"></script-->
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>