<?php
$server   = 'hl362.dinaserver.com';
$usuari   = 'Equip1';
$passwd   = 'Equip1';
$database = 'tenda1';


$conexion = new mysqli();
@$conexion->connect($server, $usuari, $passwd, $database);

if (!$conexion->connect_error){
  echo "Connexió correcta";
}else{
	echo "Connexió incorrecta";
}
?>
