<?php
session_start();


if (@!$_SESSION['rol'] and @!$_SESSION['usuario']) {
    header("Location:index.html");
}

if ($_SESSION['rol']==1) {


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
login correcto. acceso a pagina 2


<a href="./logs/cerrar.php">cerrarsesion</a>
</body>
</html>


<?php
}
  ?>