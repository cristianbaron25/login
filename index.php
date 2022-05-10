<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="css/estilos.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
      
          <!-- Icon -->
          <div class="fadeIn first">
            <img src="iconos/usuario.png" id="icon" alt="User Icon" />
          </div>
      
          <!-- Login Form -->
          <form action="validacion.php" method="POST">
            <input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="Usuario">
            <input type="password" id="contraseña" class="fadeIn third" name="contraseña" placeholder="Password">
            <input type="submit" class="fadeIn fourth" value="Ingresar">
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">Olvido su contraseña?</a>
          </div>
      
        </div>
      </div>
</body>
</html>