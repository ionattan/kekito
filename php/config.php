<?php
error_reporting(-1);
ini_set('display_errors', 'On');
$host = "localhost";
$usuario = "geek";
$password = "z98xxx53";
$database = "kekito";

$conexion=new mysqli($host,$usuario,$password,$database);
if(mysqli_connect_errno()){
  echo "no se pudo conectar";
}
