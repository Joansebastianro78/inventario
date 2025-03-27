<?php
$servename = "localhost:3306";
$database = "inventario";
$username = "root";
$password = "";

 
$conn = mysqli_connect($servename, $username, $password, $database);

 
if(mysqli_connect_error()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}



