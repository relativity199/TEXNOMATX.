<?php
// este codigo conecta a la base de datos
$conectarbd= new mysqli('localhost', 'root', '', 'registro')
 or die("Error al coectarse con la base de datos");

$nombre=$_POST['nombre'];
$correo=$_POST['email'];
$clave=$_POST['clave'];
$Fecha=$_POST['Fecha'];
// $rol=$_POST["rol"];
// $id_de_usuario=$_POST["id_de_usuario"]; 

// se crearon las variables $ [''] los nombre de los input en el formulario
// md5 es para encriptar la clave

 
  $guardar=$conectarbd->query("INSERT INTO registro(nombre, email, clave, Fecha)
  VALUES( '$nombre',  '$correo', '$clave', '$Fecha')"); // guardar datos en la tabla dtos_clientes

  if ($guardar) {
  	echo '<script type="text/javascript">alert("Registro Exitoso");</script>';
  	header( "refresh:1; url=index2.html" );

 }

   else{
        echo '<script type="text/javascript">alert("Error al guardar");</script>';
 }

 ?>