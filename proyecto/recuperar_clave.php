<!DOCTYPE html>
<html lang="en">
  <head>
  	  <meta charset="utf-8">
  	  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
  	  <link rel="stylesheet" type="text/css" href="css/menu.css">
  	  <link rel="stylesheet" type="text/css" href="css/STYLE.CSS">
  	<title>Recuperar Contraseña</title>
  </head>
  <body background="img/EMAS.jpeg">
  	<div class="login-page">
  		<div class="form">
  			<h2 class="titulo">Recuperar Contraseña</h2>

  			 <form class="login-form" action="guardar_clave2.php" method="POST">
  			   
  			   <input type="number" placeholder="Numero de Documento" name="documento" class="campoentrada">
  			   <input type="password" placeholder="Clave Anterior" name="clave1" class="campoentrada">
  			   <input type="password" placeholder="Nueva Contraseña" name="clave2" class="campoentrada">
  			   <input type="password" placeholder="Confirme Contraseña" name="clave3" class="campoentrada">
  			   


  			   <button type="submit" name="enviar" class="boton">Cambiar Contraseña</button>
  			  <p class="message">Ya estas Registrado? <a href="login.php">Iniciar</a></p>
  			 </form>
  		</div>
  	  </div>
  </body>
</html>

