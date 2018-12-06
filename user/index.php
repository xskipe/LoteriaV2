 <?php
 session_start();
if($_SESSION["logueado"] = TRUE) {
        
if ($_SESSION["tipo_usuario"] != "Usuario") {
	if ($_SESSION["tipo_usuario"] == "Administrador") {
    header("Location: ../admin/");
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
	<title>Loteria | Panel Usuario</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="../assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="../assets/css/default/style.min.css" rel="stylesheet" />
	<link href="../assets/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="../assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
    <link href="../assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
    <link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <link href="../assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/pace/pace.min.js"></script>
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
				<a href="index.php" class="navbar-brand"><span class="navbar-logo"></span> <b>Lot</b>eria</a>
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
						<img src="../assets/img/user/user-13.jpg" alt="" /> 
						<span class="d-none d-md-inline">Usuario</span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="dropdown-divider"></div>
						<a href="../login/cerrar.php" class="dropdown-item">Cerrar Sesion</a>
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
								<img src="../assets/img/user/user-13.jpg" alt="" />
							</div>
							<div class="info">
								<b class="caret pull-right"></b>
								Usuario
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

					<li class="has-sub active">
						<a href="index.php">
					        <b class="caret"></b>
						    <i class="fa fa-th-large"></i>
						    <span>Inicio</span>
					    </a>
					</li>
					
					<li class="has-sub ">
						<a href="resultados/vista.php">
					        <b class="caret"></b>
						    <i class="fa fa-check-circle"></i>
						    <span>Ver Resultados</span>
						</a>
						
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
				<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
				<li class="breadcrumb-item active"><a href="javascript:;">Panel Usuario</a></li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Panel Usuario <small>Bienvenido...</small></h1>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-3 -->
			    <div class="col-lg-3 col-md-6">
			        <div class="widget widget-stats bg-gradient-green">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
			        	<div class="stats-content">
							<div class="stats-title">TODAY'S VISITS</div>
							<div class="stats-number">7,842,900</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 70.1%;"></div>
							</div>
							<div class="stats-desc">Better than last week (70.1%)</div>
                        </div>
			        </div>
			    </div>
			    <!-- end col-3 -->
			    <!-- begin col-3 -->
			    <div class="col-lg-3 col-md-6">
			        <div class="widget widget-stats bg-gradient-blue">
			            <div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">TODAY'S PROFIT</div>
							<div class="stats-number">180,200</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 40.5%;"></div>
							</div>
							<div class="stats-desc">Better than last week (40.5%)</div>
						</div>
			        </div>
			    </div>
			    <!-- end col-3 -->
			    <!-- begin col-3 -->
			    <div class="col-lg-3 col-md-6">
			        <div class="widget widget-stats bg-gradient-purple">
			            <div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
			        	<div class="stats-content">
							<div class="stats-title">NEW ORDERS</div>
							<div class="stats-number">38,900</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 76.3%;"></div>
							</div>
							<div class="stats-desc">Better than last week (76.3%)</div>
						</div>
			        </div>
			    </div>
			    <!-- end col-3 -->
			    <!-- begin col-3 -->
			    <div class="col-lg-3 col-md-6">
			        <div class="widget widget-stats bg-gradient-black">
			            <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
			        	<div class="stats-content">
							<div class="stats-title">NEW COMMENTS</div>
							<div class="stats-number">3,988</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 54.9%;"></div>
							</div>
							<div class="stats-desc">Better than last week (54.9%)</div>
						</div>
			        </div>
			    </div>
			    <!-- end col-3 -->
			</div>
			<!-- end row -->
			
			<!-- begin row -->
			<div class="row">
				<!-- begin col-8 -->
			    <div class="col-lg-8">
			        <div class="widget-chart with-sidebar bg-black">
			            <div class="widget-chart-content">
			                <h4 class="chart-title">
			                    Visitors Analytics
			                    <small>Where do our visitors come from</small>
			                </h4>
			                <div id="visitors-line-chart" class="widget-chart-full-width nvd3-inverse-mode" style="height: 260px;"></div>
			            </div>
			            <div class="widget-chart-sidebar bg-black-darker">
			                <div class="chart-number">
			                    1,225,729
			                    <small>Total visitors</small>
			                </div>
			                <div id="visitors-donut-chart" class="nvd3-inverse-mode p-t-10" style="height: 180px"></div>
			                <ul class="chart-legend f-s-11">
			                    <li><i class="fa fa-circle fa-fw text-primary f-s-9 m-r-5 t-minus-1"></i> 34.0% <span>New Visitors</span></li>
			                    <li><i class="fa fa-circle fa-fw text-success f-s-9 m-r-5 t-minus-1"></i> 56.0% <span>Return Visitors</span></li>
			                </ul>
			            </div>
			        </div>
			    </div>
			    <!-- end col-8 -->
			    <!-- begin col-4 -->
			    <div class="col-lg-4">
			        <div class="panel panel-inverse" data-sortable-id="index-1">
			            <div class="panel-heading">
			                <h4 class="panel-title">
			                    Visitors Origin
			                </h4>
			            </div>
			            <div id="visitors-map" class="bg-black" style="height: 179px;"></div>
			            <div class="list-group">
                            <a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
                                1. United State 
                                <span class="badge f-w-500 bg-gradient-green f-s-10">20.95%</span>
                            </a> 
                            <a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
                                2. India
                                <span class="badge f-w-500 bg-gradient-blue f-s-10">16.12%</span>
                            </a>
                            <a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
                                3. Mongolia
                                <span class="badge f-w-500 bg-gradient-grey f-s-10">14.99%</span>
                            </a>
                        </div>
			        </div>
			    </div>
			    <!-- end col-4 -->
			</div>
			<!-- end row -->
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-4 -->
			    <div class="col-lg-4">
			        <!-- begin panel -->
			        <div class="panel panel-inverse" data-sortable-id="index-2">
			            <div class="panel-heading">
			                <h4 class="panel-title">Chat History <span class="label bg-gradient-green pull-right">4 message</span></h4>
			            </div>
			            <div class="panel-body bg-silver">
							<div class="chats" data-scrollbar="true" data-height="225px">
								<div class="left">
									<span class="date-time">yesterday 11:23pm</span>
									<a href="javascript:;" class="name">Sowse Bawdy</a>
									<a href="javascript:;" class="image"><img alt="" src="../assets/img/user/user-12.jpg" /></a>
									<div class="message">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit volutpat. Praesent mattis interdum arcu eu feugiat.
									</div>
								</div>
								<div class="right">
									<span class="date-time">08:12am</span>
									<a href="javascript:;" class="name"><span class="label label-primary">ADMIN</span> Me</a>
									<a href="javascript:;" class="image"><img alt="" src="../assets/img/user/user-13.jpg" /></a>
									<div class="message">
										Nullam posuere, nisl a varius rhoncus, risus tellus hendrerit neque.
									</div>
								</div>
								<div class="left">
									<span class="date-time">09:20am</span>
									<a href="javascript:;" class="name">Neck Jolly</a>
									<a href="javascript:;" class="image"><img alt="" src="../assets/img/user/user-10.jpg" /></a>
									<div class="message">
										Euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</div>
								</div>
								<div class="left">
									<span class="date-time">11:15am</span>
									<a href="javascript:;" class="name">Shag Strap</a>
									<a href="javascript:;" class="image"><img alt="" src="../assets/img/user/user-14.jpg" /></a>
									<div class="message">
										Nullam iaculis pharetra pharetra. Proin sodales tristique sapien mattis placerat.
									</div>
								</div>
							</div>
                        </div>
                        <div class="panel-footer">
                            <form name="send_message_form" data-id="message-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="message" placeholder="Enter your message here.">
                                    <span class="input-group-append">
                                        <button class="btn btn-primary" type="button"><i class="fa fa-camera"></i></button>
                                        <button class="btn btn-primary" type="button"><i class="fa fa-link"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
			        </div>
			        <!-- end panel -->
			    </div>
			    <!-- end col-4 -->
			    <!-- begin col-4 -->
			    <div class="col-lg-4">
			        <!-- begin panel -->
			        <div class="panel panel-inverse" data-sortable-id="index-3">
			            <div class="panel-heading">
			                <h4 class="panel-title">Today's Schedule</h4>
			            </div>
			            <div id="schedule-calendar" class="bootstrap-calendar"></div>
			            <div class="list-group">
                            <a href="javascript:;" class="list-group-item d-flex justify-content-between align-items-center text-ellipsis">
                                Sales Reporting
                                <span class="badge f-w-500 bg-gradient-green f-s-10">9:00 am</span>
                            </a> 
                            <a href="javascript:;" class="list-group-item d-flex justify-content-between align-items-center text-ellipsis">
                                Have a meeting with sales team
                                <span class="badge f-w-500 bg-gradient-blue f-s-10">2:45 pm</span>
                            </a>
                        </div>
			        </div>
			        <!-- end panel -->
			    </div>
			    <!-- end col-4 -->
			    <!-- begin col-4 -->
			    <div class="col-lg-4">
			        <!-- begin panel -->
			        <div class="panel panel-inverse" data-sortable-id="index-4">
			            <div class="panel-heading">
			                <h4 class="panel-title">New Registered Users <span class="pull-right label bg-gradient-green">24 new users</span></h4>
			            </div>
                        <ul class="registered-users-list clearfix">
                            <li>
                                <a href="javascript:;"><img src="../assets/img/user/user-5.jpg" alt="" /></a>
                                <h4 class="username text-ellipsis">
                                    Savory Posh
                                    <small>Algerian</small>
                                </h4>
                            </li>
                            <li>
                                <a href="javascript:;"><img src="../assets/img/user/user-3.jpg" alt="" /></a>
                                <h4 class="username text-ellipsis">
                                    Ancient Caviar
                                    <small>Korean</small>
                                </h4>
                            </li>
                            <li>
                                <a href="javascript:;"><img src="../assets/img/user/user-1.jpg" alt="" /></a>
                                <h4 class="username text-ellipsis">
                                    Marble Lungs
                                    <small>Indian</small>
                                </h4>
                            </li>
                            <li>
                                <a href="javascript:;"><img src="../assets/img/user/user-8.jpg" alt="" /></a>
                                <h4 class="username text-ellipsis">
                                    Blank Bloke
                                    <small>Japanese</small>
                                </h4>
                            </li>
                            <li>
                                <a href="javascript:;"><img src="../assets/img/user/user-2.jpg" alt="" /></a>
                                <h4 class="username text-ellipsis">
                                    Hip Sculling
                                    <small>Cuban</small>
                                </h4>
                            </li>
                            <li>
                                <a href="javascript:;"><img src="../assets/img/user/user-6.jpg" alt="" /></a>
                                <h4 class="username text-ellipsis">
                                    Flat Moon
                                    <small>Nepalese</small>
                                </h4>
                            </li>
                            <li>
                                <a href="javascript:;"><img src="../assets/img/user/user-4.jpg" alt="" /></a>
                                <h4 class="username text-ellipsis">
                                    Packed Puffs
                                    <small>Malaysian></small>
                                </h4>
                            </li>
                            <li>
                                <a href="javascript:;"><img src="../assets/img/user/user-9.jpg" alt="" /></a>
                                <h4 class="username text-ellipsis">
                                    Clay Hike
                                    <small>Swedish</small>
                                </h4>
                            </li>
                        </ul>
			            <div class="panel-footer text-center">
			                <a href="javascript:;" class="text-inverse">View All</a>
			            </div>
			        </div>
			        <!-- end panel -->
			    </div>
			    <!-- end col-4 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->
		
        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-theme-file="../assets/css/default/theme/default.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="../assets/css/default/theme/red.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="../assets/css/default/theme/blue.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="../assets/css/default/theme/purple.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="../assets/css/default/theme/orange.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="../assets/css/default/theme/black.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
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
	<script src="../assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="../assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="../assets/js/theme/default.min.js"></script>
	<script src="../assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.2/d3.min.js"></script>
    <script src="../assets/plugins/nvd3/build/nv.d3.js"></script>
    <script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js"></script>
    <script src="../assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
	<script src="../assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="../assets/js/demo/dashboard-v2-2.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			DashboardV2.init();
		});
	</script>
	
</body>
</html>
