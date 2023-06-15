<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>REGISTRATE</title>
    <link rel="stylesheet" href="./css/bootstrap.min (3).css"/>
    <link rel="icon" href="./img/icono.jpeg">


</head>
<body>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color:lightblue ;">FARMACIAS P&P</a>
  
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./inicio sesion.html">MI CUENTA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="./indexx.html">INICIO</a>
                  </li>
  
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="ofertas.html">OFERTAS</a>
                  </li>
  
                  <li class="nav-item dropdown">
                   
                    <a class="nav-link dropdown-toggle active" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      PRODUCTOS
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">PERFUMERIA</a></li>
                    <li><a class="dropdown-item" href="#">FARMACIA</a></li>
                    <li><a class="dropdown-item" href="#">ARTICULOS GENERALES</a></li>

                    </ul>
                  </li>
    
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="mapa.html">MAPA</a>
                  </li>
                  
                </div>
                  <a class="nav-link" href="#"><img src="./img/carrito2.jpg" width="43" height="43">
                
                </li>
              </ul>
          </div>
        </nav>
        
  </body>
</body>
<body>
    <center>
      <br>
    <h1>REGISTRATE</h1>

    <div>

      <form method="post" action="enviarregistro.php">
        <label/> USUARIO: </label>
        <input type="text" name="usuario" placeholder="Usuario">
        <br><br>
        <label/> APELLIDO: </label>
        <input type="text" name="apellido" placeholder="Apellido">
        <br><br>
        <label/> NOMBRE: </label>
        <input type="text" name="nombre" placeholder="Nombre">
        <br><br>
        <label/> DNI: </label>
        <input type="number" name="dni" placeholder="Dni">
        <br><br>
        <label/> TELEFONO: </label>
        <input type="number" name="telefono" placeholder="Telefono">
        <br><br>
        <label/> DOMICILIO: </label>
        <input type="text" name="domicilio" placeholder="Domicilio">
        <br><br>
        <label/> CORREO: </label>
        <input type="text" name="correo" placeholder="Correo">
        <br><br>
        <label/> CONTRASEÑA: </label>
        <input type="password" name="contra" placeholder="Contraseña">
        <br><br>
        <input type="submit" class="btn btn-primary" name="registrase" value="registrar">
    </form>

    </div>
    
    </center>

</body>
</html>