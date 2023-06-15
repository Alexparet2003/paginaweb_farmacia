

<?php
session_start();
require("");

$usuario=$_POST['user'];
$contra=$_POST['pass'];


//$contra=md5($contra);

/**
 * ctrl+shift+c paleta de colores

 */




$resu2=mysqli_query($link,"SELECT * FROM login  WHERE usuario='$usuario'");
while($f2=mysqli_fetch_array($resu2)){


$usudb=$f2['usuario'];
$contradb=$f2['contra'];
$roldb=$f2['rol'];

if ($usudb==$usuario && $contradb==$contra and $roldb==1) {
	echo "<br>hay usuario";
	$_SESSION['id']=$f2['idlog'];
	$_SESSION['usuario']=$usudb;
	$_SESSION['pass']=$contradb;
	$_SESSION['rol']=$roldb;
		echo '<script>alert("BIENVENIDO ADMIN")</script>';
echo "<script>location.href='views/pag2.php'</script>";	

}else{
echo '<script>alert("USUARIO O CLAVE INCORRECTA")</script>';
echo "<script>location.href='../micuenta.php'</script>";
}




/*

	
		if($contra==$f2['pass'] and $f2['id_rol']==1 ){
								$_SESSION['id']=$f2['id_user'];
								$_SESSION['usuario']=$f2['nombreuser'];
								$_SESSION['pass']=$f2['pass'];
								$_SESSION['rol']=$f['id_rol'];
						
							
								}else{
									// ñ \u00F1
									//Ñ  \u00D1
						 				echo '<script>alert("admin ")</script>';
										echo "<script>location.href='../index.php'</script>";


							}





}else{
echo '<script>alert("user o pass incorrecto ")</script>';

}	*/						



	}
































/*
$resu=mysqli_query($link,"SELECT * FROM login  WHERE usuario='$usuario'");
 while($consulta = mysqli_fetch_array($resu)){
 	if($usuario<>$consulta['usuario']){

	echo '<script>alert("este usuario no existe")</script>';
	echo '<script>location.href="inicio.php"</script>';


 	}else if($contra==$consulta['passadmin']){
		echo '<script>alert("BIENVENIDO ADMIN")</script>';
		echo "<script>location.href='../gg/index.php'</script>";


	 }else{
	 ECHO "<html>";
 echo"<meta charset='UFT-8'>";

	 	echo '<script>alert("contrasea incorrecta")</script>';
	 echo "	</html>";
		echo '<script>location.href="inicio.php"</script>';

	 }
}
$resu2=mysqli_query($link,"SELECT * FROM login  WHERE usuario='$usuario'");

	while($consulta2 = mysqli_fetch_array($resu2)){




		if($contra==$consulta2['pass']){
		header("location:../FACTURAR/demo.php");
		}else{
		echo '<script>alert("contraseña incorrecta")</script>';
		echo '<script>location.href="inicio.php"</script>';

	}


	}

*/




?>
