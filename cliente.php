<?php
ini_set("soap.wsdl_cache_enabled", "0");
	
//Cargo archivo WSDL con la esctructura de un archivo XML
$client = new SoapClient("http://localhost/webservice/ejemplo4/inventory.wsdl");
	
//Genero formulario
echo '<form method="post" action="cliente.php">
<label>Ingresar nombre:</label>
<input type="input" id="dato" name="dato">
<input type="submit" value="buscar">
</form>';
	
//Traigo la información
if(!empty($_POST['dato'])){
	$return = $client->getUsuario($_POST['dato']);
	if($return<>''){
		echo '<div style="font-size:20px;">';
		print_r($return);
		echo '</div>';
	}else{
		echo 'Usuario no encontrado';
	}
}
?>