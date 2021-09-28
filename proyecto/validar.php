<?php
// este codigo conecta a la base de datos
$conectarbd= new mysqli('localhost', 'root', '', 'registro')
 or die("Error al coectarse con la base de datos");

 $usuario=$_POST['nombre'];
 $clave=$_POST['clave'];
 
 $cliente=$conectarbd->query("SELECT * FROM registro where nombre='$usuario' and Clave='$clave'");
//  $tecnico=$conectarbd->query("SELECT * FROM registro where CC='$usuario' and Clave='$clave' and ");

 if ($fila=mysqli_fetch_array($cliente)) {
 	//session_start();
 	//$_SESSION['nombre']=$_POST['nombre'];
 	header("location: index2.html ");
 }
//  elseif ($fila=mysqli_fetch_array($tecnico)) {
//  	session_start();
//  	$_SESSION['nombre']=$_POST['nombre']; 
//  	header("location: tecnico.php ");
//  }
 else {
 	   echo '<script type="text/javascript">alert("error de nombre o contraseña");</script>';
 	      header( "refresh:1; url=login.php");
 }
?>