<?php

include ('funciones.php');

$usuario=$_POST['usuario'];

$apellido=$_POST['apellido'];

$nombre=$_POST['nombre'];

$DNI=$_POST['dni'];

$telefono=$_POST['telefono'];

$domicilio=$_POST['domicilio'];

$correo=$_POST['correo'];

$password=$_POST['contra'];


$var=new cliente();

$var->usuario=$usuario;
$var->apellido=$apellido;
$var->nombre=$nombre;
$var->DNI=$DNI;
$var->telefono=$telefono;
$var->domicilio=$domicilio;
$var->correo=$correo;
$var->password=$password;

$objeto=new base();
echo $objeto->ingresar($var);

header ("location: ./index.php");

?>