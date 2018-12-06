<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>

<?php 
require('connect_db.php');


if (isset($_POST['submit'])) {

	$type=$_POST['type'];
	$username=$_POST['username'];
	$password=$_POST['pdw'];

	$query="SELECT * FROM usuarios WHERE Cedula='$username' and Password='$password' and Tipo_usuario='$type'";
	$result=mysqli_query($mysqli,$query);
	$rows = $result->num_rows;


if ($rows > 0 ) {
	session_start();
      //nombre del usuario logueado. 

	while ($row=mysqli_fetch_array($result)) {


		if ($row['Cedula']==$username && $row['Password']==$password && $row['Tipo_usuario']=='Administrador') {
			$_SESSION["logueado"] = TRUE; 
			$_SESSION["tipo_usuario"] = "Administrador";
			header("location: ../admin/index.php");
		}elseif ($row['Cedula']==$username && $row['Password']==$password && $row['Tipo_usuario']=='Usuario') {
			$_SESSION["logueado"] = TRUE; 
			$_SESSION["tipo_usuario"] = "Usuario";
			header("location: ../user/index.php");

		}
	}

}else{


		Header("Location: login.php?error=login");

	// echo "<script>alert('Usuario o ContraseÃÂ±a incorrecto. Porfavor Intente nuevamente'); window.location.assign('login.php') </script>";

 	

	//header("location: index.php");
}
}

 ?>
