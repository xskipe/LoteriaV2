<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar

	$nomb=$_POST['nomb'];
	$ape=$_POST['ape'];
	$cc=$_POST['cc'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	$cel=$_POST['cel'];
	$mail=$_POST['mail'];
	$dpt= $_POST['dpt'];
	$mun=$_POST['mun'];
	$tp_user=$_POST['tp_user'];
	$codus=$_POST['codus'];


	require('../connect_db.php');

	if($pass==$rpass){
	$sentencia="UPDATE usuarios SET Nombre='$nomb', Apellido='$ape', Cedula='$cc', Password='$pass', 
	Celular='$cel', Correo='$mail', Departamento='$dpt', Municipio='$mun', Tipo_usuario='$tp_user' WHERE Cod_usuario='$codus'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: actualizar.php");
		
		echo "<script>location.href='editar.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='editar.php'</script>";

		
	}
}else{
			echo '<script language="javascript">alert("Las contraseñas son incorrectas");</script>';
			echo "<script>location.href='editar.php'</script>";
		}



?>


