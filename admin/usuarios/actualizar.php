 <?php
 session_start();
if($_SESSION["logueado"] = TRUE) {
        
if ($_SESSION["tipo_usuario"] != "Administrador") {
	if ($_SESSION["tipo_usuario"] == "Usuario") {
    header("Location: ../../user/");
	}else {header("Location: ../login/login.php");}

}

}

 
 ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Loteria | Editar Usuario</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="../../assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../../assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="../../assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="../../assets/css/default/style.min.css" rel="stylesheet" />
	<link href="../../assets/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="../../assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../../assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="../index.php" class="navbar-brand"><span class="navbar-logo"></span> <b>Lot</b>eria</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header -->
			
			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				<li class="dropdown navbar-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<img src="../../assets/img/user/user-13.jpg" alt="" /> 
						<span class="d-none d-md-inline">Administrador</span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="dropdown-divider"></div>
						<a href="../../login/cerrar.php" class="dropdown-item">Cerrar Sesion</a>
					</div>
				</li>
			</ul>
			<!-- end header navigation right -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
							<div class="image">
								<img src="../../assets/img/user/user-13.jpg" alt="" />
							</div>
							<div class="info">
								<b class="caret pull-right"></b>
								Administrador
								<small>Bienvenido</small>
							</div>
						</a>
					</li>
					<li>
						<ul class="nav nav-profile">
                        </ul>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navegacion</li>
					<li class="has-sub">
						<a href="../index.php">
					        <b class="caret"></b>
						    <i class="fa fa-th-large"></i>
						    <span>Inicio</span>
					    </a>
					</li>
					
	
					<li class="has-sub active">
						<a href="editar.php">
					        <b class="caret"></b>
						    <i class="fa fa-users"></i>
						    <span>Usuarios</span>
						</a>
						
						<ul class="sub-menu">
						    <li ><a href="crear.php" >Crear Nuevo Usuario</a></li>
						    <li class="active"><a href="editar.php" >Editar Usuarios</a></li>
						</ul>


					</li>
					
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
				<li class="breadcrumb-item"><a href="editar.php">Usuarios</a></li>
				<li class="breadcrumb-item active">Editar Usuario</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Editar Usuarios <small>Complete todos los campos requeridos  <span class="text-danger">*</span> ...</small></h1>
			<!-- end page-header -->


			<!-- begin panel -->
			<div class="panel panel-inverse">
			    <div class="panel-heading">
			        <div class="panel-heading-btn">
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
			        </div>
			        <h4 class="panel-title">Editando Usuario</h4>
			    </div>
			    <div class="panel-body">
			        <br>
<?php 
include('../connect_db.php');
?>
<?php 
$query = 'SELECT * FROM usuarios';
$resultado = $mysqli->query($query);
?>

<?php 
extract($_GET);
    $sql="SELECT * FROM usuarios WHERE Cod_usuario=$id";
  //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
    $ressql=mysqli_query($mysqli,$sql);
    while ($row=mysqli_fetch_row ($ressql)){
          $Cod_usuario=$row[0];
          $Nombre=$row[1];
          $Apellido=$row[2];
          $Cedula=$row[3];
          $Password=$row[4];
          $Celular=$row[5];
          $Correo=$row[6];
          $Departamento=$row[7];
          $Municipio=$row[8];
          $Tipo_usuario=$row[9];

        }
?>


<?php echo "

<div class='formularioactualizar'>
<form method='post' action='ejecutaactualizar.php' >
  <fieldset>
     
   <label class='control-label'>Codigo de Usuario </label>
                        <div class='row m-b-15'>
                            <div class='col-md-12'>
                                <input type='number' name='codus' class='form-control' value='".$Cod_usuario."' readonly='readonly' required />
                            </div>
                        </div>

   <label class='control-label'>Nombres y Apellidos <span class='text-danger'>*</span></label>
                        <div class='row row-space-10'>
                            <div class='col-md-6 m-b-15'>
                                <input type='text' name='nomb' class='form-control' value='".$Nombre."' required />
                            </div>
                            <div class='col-md-6 m-b-15'>
                                <input type='text' name='ape' class='form-control' value='".$Apellido."' required />
                            </div>
                        </div>

                        <label class='control-label'>Cedula de Ciudadania <span class='text-danger'>*</span></label>
                        <div class='row m-b-15'>
                            <div class='col-md-12'>
                                <input type='number' name='cc' class='form-control' value='".$Cedula."' required />
                            </div>
                        </div>

						<label class='control-label'>Celular <span class='text-danger'>*</span></label>
                        <div class='row m-b-15'>
                            <div class='col-md-12'>
                                <input type='number' name='cel' class='form-control' value='".$Celular."' required />
                            </div>
                        </div>

                        <label class='control-label'>Correo electrónico <span class='text-danger'>*</span></label>
                        <div class='row m-b-15'>
                            <div class='col-md-12'>
                                <input type='email' name='mail' class='form-control' value='".$Correo."' required />
                            </div>
                        </div>

                         <label class='control-label'>Departamento <span class='text-danger'>*</span></label>
                        <div class='row m-b-15'>
                            <div class='col-md-12'>
                                <input type='text' name='dpt' class='form-control' value='".$Departamento."' required />
                            </div>
                        </div>

                         <label class='control-label'>Municipio <span class='text-danger'>*</span></label>
                        <div class='row m-b-15'>
                            <div class='col-md-12'>
                                <input type='text' name='mun' class='form-control' value='".$Municipio."' required />
                            </div>
                        </div>

                         <label class='control-label'>Contraseña Nueva <span class='text-danger'>*</span></label>
                        <div class='row m-b-15'>
                            <div class='col-md-12'>
                                <input type='text' name='pass' class='form-control' value='".$Password."' required />
                            </div>
                        </div>

                         <label class='control-label'>Repite contraseña <span class='text-danger'>*</span></label>
                        <div class='row m-b-15'>
                            <div class='col-md-12'>
                                <input type='text' name='rpass' class='form-control' placeholder='Repite contraseña' required />
                            </div>
                        </div>
				
						<div class='form-group m-b-15'>
							<label class='col-md-4 col-sm-4 col-form-label'>Tipo de Usuario <span class='text-danger'>*</span></label>
							<div class='col-md-8 col-sm-8'>
								<select class='form-control' id='select-required' name='tp_user' data-parsley-required='true'>
									<option>".$Tipo_usuario."</option>
									<option value='Usuario'>Usuario</option>
									<option value='Administrador'>Administrador</option>
								</select>
							</div>
						</div>
      <br>

						<div class='register-buttons'>
                            <button type='submit' name='submit' class='btn btn-primary btn-block btn-lg'>Guardar</button>
                        </div>
        
    
  </fieldset>
</form>

</div>


" ?>
			       


			    </div>
			</div>
			<!-- end panel -->


			<!-- begin panel -->
			<div class="panel panel-inverse">
			    <div class="panel-heading">
			        <div class="panel-heading-btn">
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
			        </div>
			        <h4 class="panel-title">Usuarios Creados </h4>
			    </div><div class="panel-body">
			    <div class="panel-body">
			        <br><br>




 <div class='table-responsive'>
         <table class='table table-hover' width='700px'>
            <td><b> Cod_Usuario </b></td>
         	<td><b> Nombres </b></td>
         	<td><b> Apellidos </b></td>
         	<td><b> Cedula </b></td>
         	<td><b> Contraseña </b></td>
         	<td><b> Celular </b></td>
         	<td><b> Correo </b></td>
         	<td><b> Departamento </b></td>
         	<td><b> Municipio </b></td>
         	<td><b> Tipo Usuario </b></td>
         	<td> </td>
         	</tr>




<?php


 while($arreglo=mysqli_fetch_array($resultado)){
            echo "<tr class='even'>";
              echo "<td>$arreglo[0]</td>";
              echo "<td>$arreglo[1]</td>";
              echo "<td>$arreglo[2]</td>";
              echo "<td>$arreglo[3]</td>";
              echo "<td>$arreglo[4]</td>";
              echo "<td>$arreglo[5]</td>";
              echo "<td>$arreglo[6]</td>";
              echo "<td>$arreglo[7]</td>";
              echo "<td>$arreglo[8]</td>";
              echo "<td>$arreglo[9]</td>";


            echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='imagenes/editar.png' style='width: 40px; height: 40px;' class='img-rounded'></td>";
            
            

            
          echo "</tr>";
        }

        echo "</table>";

          extract($_GET);
          if(@$idborrar==2){
    
            $sqlborrar="DELETE FROM usuarios WHERE Cod_usuario=$id";
            $resborrar=mysqli_query($mysqli,$sqlborrar);
            echo '<script>alert("REGISTRO ELIMINADO")</script> ';
            //header('Location: proyectos.php');
            echo "<script>location.href='edicion.php'</script>";
          }
?>


       

			    </div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end #content -->
		
		<!-- begin #footer -->
		<div id="footer" class="footer">
		    &copy; Nahara Soft -  All Rights Reserved
		</div>
		<!-- end #footer -->
		
        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-theme-file="../../assets/css/default/theme/default.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="../../assets/css/default/theme/red.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="../../assets/css/default/theme/blue.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="../../assets/css/default/theme/purple.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="../../assets/css/default/theme/orange.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="../../assets/css/default/theme/black.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Header Styling</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control form-control-sm">
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="javascript:;" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage">Reset Local Storage</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../../assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="../../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="../../assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="../../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../../assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="../../assets/js/theme/default.min.js"></script>
	<script src="../../assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
</body>
</html>
