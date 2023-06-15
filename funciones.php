<?php

Class base{
  private $serv="localhost";
private $usuario="root";
private $contra="";
//CAMBIA EL NOMBRE DE LA BASE DE DATOS PORQUE YO TENGO OTRO
private $base="farmmacia";


//CREAMOS LA FUNCION QUE SIRVE PARA CONECTAR A LA BASE DE DATOS puede ser cualquier nombre
function conectar(){
//dentro de la funcion 
$conexion= mysqli_connect($this->serv, $this->usuario, $this->contra, $this->base) or die ("Error de conexion");

//confirmamos que se haya conectado
        if ($conexion) {
            echo "conectado";
        }
//retornamos la conexion


        return $conexion;


}
Function cerrar($con){
    mysqli_close ($con);
}

Function ingresar($objeto){
    $conec=$this->conectar();
    $insertar= "INSERT INTO cliente (nombre,apellido,DNI,cel,domicilio,mail) Values('$objeto->nombre', '$objeto->apellido','$objeto->DNI','$objeto->cel' ,'$objeto->domicilio', '$objeto->mail')";
    mysqli_query($conec,$insertar) or die ("ERROR");
    echo'<script languaje="javascript">alert("ingresado");</script>';
    $this->cerrar($conec);
}

function mostrar(){
    //acceso a la conecciion 
    
    $con=$this->conectar();
    
    //consulta
    
    $consultar="SELECT * FROM producto";
    
    $consu=mysqli_query($con,$consultar);
    
    $mu=array();
    
    //accedemos a los datos de la consulta
    
    while ($row=mysqli_fetch_array($consu)) {
    
    $var=new producto();
    
    //el resultado de la consulta viene en forma de array entonces tenemos que acceder a su subindice
    
    $var->id=$row[0];
    $var->txt1=$row[1];
    $var->txt2=$row[2];
    $var->txt3=$row[3];
    
    
    array_push($mu,$var);
    }
    return $mu;
    }
    


} //cierra clase base


Class cliente{
    public $nombre;
    Public $apellido;
    Public $DNI;
    Public $cel;
    public $domicilio;
    public $mail;

}



?>