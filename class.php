<?php
class Usuarios{
	public function getUsuario($usuario){
		$arreglo = array(); //arreglo para guardar los datos
		
		define('SERVIDOR','localhost');
		define('USER','xxxxxxx');
		define('PASS','xxxxxxx');
		define('BASE','xxxxxxx');
		
		//Conexion basica a la base de datos
		$conn=mysql_connect(SERVIDOR,USER,PASS);
		mysql_select_db(BASE);
		
		//Query MySql
		$sql="SELECT id, nombre, apellido, sexo FROM usuarios WHERE nombre='$usuario'";
		$result=mysql_query($sql,$conn);
		 
		if ($reg=mysql_fetch_assoc($result)){
			if($reg['sexo']=='f'){$sexo ='Mujer';}else{$sexo = 'Hombre';}
			return $existe=$reg['nombre'].' '.$reg['apellido'].' Es '.$sexo;
		}
	}
}
?>