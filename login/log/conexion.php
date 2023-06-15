<?php

//conexion a b.d
$h="localhost";	//localhost o 127.0.0.1
$u="root";	//root usuario
$p="";	//"   " contraseña
$d="log"; //Productos nombre base de datos

$link=@mysqLi_connect($h,$u,$p,$d) or die("No se ha podido establecer la conexion");

if ($link) {
	echo "conectado";
}
?>