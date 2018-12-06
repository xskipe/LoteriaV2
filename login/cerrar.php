<meta content="3;URL=http://localhost/loteria/login/login.php" http-equiv="REFRESH"> </meta>
<?php
 echo "<script>alert('Cerrando Sesion. Te esperamos de nuevo!'); window.location.assign('login.php') </script>";
session_start();
session_destroy();

?>
