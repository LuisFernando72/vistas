<?php
$servidor = "localhost";
$usuario = "root";
$password = "LuisMatrix999";
$db = "bd_gym";

$arrOptions = array(
    PDO::ATTR_EMULATE_PREPARES => FALSE, 
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
);


try{
$conexion = new PDO("mysql:dbname=$db;host=$servidor", $usuario, $password, $arrOptions);
//  echo "conexion Exitosa";
}catch(Exception $e){
echo "ERROR ENCONTRADO: ". $e -> getMessage();
}

?>