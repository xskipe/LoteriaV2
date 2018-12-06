<?php
	$realname=$_POST['realname'];
	$apellido=$_POST['apellido'];
	$cedula=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	$celular=$_POST['celular'];
	$email=$_POST['email'];
	$dpto= $_POST['dpto'];
	$municipio=$_POST['municipio'];

	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE Cedula='$cedula'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe alguien registrado con esta Cedula, verifique sus datos");</script> ';
				echo "<script>location.href='registrar.html'</script>";
			}else{
				//require("connect_db.php");
				//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO usuarios VALUES(null,'$realname','$apellido','$cedula','$pass','$celular','$email','$dpto','$municipio','Usuario')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				echo "<script>location.href='login.html'</script>";
			}
		}else{
			echo '<script language="javascript">alert("Las contraseñas son incorrectas");</script>';
			echo "<script>location.href='registrar.html'</script>";
		}
?>