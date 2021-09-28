<?php
// este codigo conecta a la base de datos
$conectarbd= new mysqli('localhost', 'root', '', 'proyectas_sena')
 or die("Error al coectarse con la base de datos");

$modelo=$_POST['modelo'];
$descripcion=$_POST['descripcion'];
// se crearon las variables $ [''] los nombre de los input en el formulario
// md5 es para encriptar la clave

include "sesion.php";
$estado="Enviada";

  $guardar=$conectarbd->query("INSERT INTO cita(Cod_cita, Model_equipo, Doc_cliente, Descripcion, Estado)
  VALUES( NULL, '$modelo', '$usuario_conectado', '$descripcion', '$estado')"); // guardar datos en la tabla cita

  if ($guardar) {
  	echo '<script type="text/javascript">alert("Cita guardada");</script>';
  	header( "refresh:1; url=tecnico.php" );
 }

   else{
        echo '<script type="text/javascript">alert("Error al guardar");</script>';
 }

 ?>