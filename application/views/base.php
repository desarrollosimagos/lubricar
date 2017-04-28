<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	 <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lubricar Deliver</title>
	<!-- CSS Files -->
    <link href="<?php base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php base_url() ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php base_url() ?>assets/css/style.css" rel="stylesheet">
</head>
<body class="md-skin fixed-nav no-skin-config">
	<div id="wrapper">
		<nav class="navbar-default navbar-static-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav metismenu" id="side-menu">
					<li class="nav-header">
						<div class="dropdown profile-element">
							<span>
								<img alt="image" class="img-circle" src="<?php base_url() ?>assets/img/profile_small.jpg" />
							</span>
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<span class="clear">
									<span class="block m-t-xs">
										<strong class="font-bold">David Williams</strong>
									</span>
									<span class="text-muted text-xs block">Art Director
										<b class="caret"></b>
									</span>
								</span>
							</a>
							<ul class="dropdown-menu animated fadeInRight m-t-xs">
								<li><a href="profile.html">Perfil</a></li>
								<li><a href="contacts.html">Contactos</a></li>
								<li class="divider"></li>
								<li><a href="login.html">Cerrar Sesión</a></li>
							</ul>
						</div>
						<div class="logo-element">
							IN+
						</div>
					</li>
					<li>
						<a href="#"><i class="fa fa-user-o"></i> <span class="nav-label">Usuarios</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level collapse">
							<li><a href="search_results.html">Perfiles</a></li>
							<li><a href="lockscreen.html">Empleados</a></li>
							
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-building"></i> <span class="nav-label">Franquicias</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level collapse">
							<li><a href="search_results.html">Edición de Datos / Asignación de Servicios</a></li>
							<li><a href="lockscreen.html">Resumen Financiero</a></li>
							<li><a href="lockscreen.html">Perfil Franquicia</a></li>
							
						</ul>
					</li>
					
					<li>
						<a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Ordenes de Servicio</span></a>
						
					</li>
					<li>
						<a href="#"><i class="fa fa-delicious"></i> <span class="nav-label">Servicios</span></a>
						
					</li>
					<li>
						<a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level collapse">
							<li><a href="search_results.html">Search results</a></li>
							<li><a href="lockscreen.html">Lockscreen</a></li>
							<li><a href="invoice.html">Invoice</a></li>
							<li><a href="login.html">Login</a></li>
							<li><a href="login_two_columns.html">Login v.2</a></li>
							<li><a href="forgot_password.html">Forget password</a></li>
							<li><a href="register.html">Register</a></li>
							<li><a href="404.html">404 Page</a></li>
							<li><a href="500.html">500 Page</a></li>
							<li><a href="empty_page.html">Empty page</a></li>
						</ul>
					</li>

				</ul>

			</div>
		</nav>

		<div id="page-wrapper" class="gray-bg">
			<div class="row border-bottom">
				<nav class="navbar navbar-fixed-top" role="navigation" style="margin-bottom: 0">
					<div class="navbar-header">
						<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
						<form role="search" class="navbar-form-custom" action="search_results.html">
							<div class="form-group">
								<input type="text" placeholder="Buscar..." class="form-control" name="top-search" id="top-search">
							</div>
						</form>
					</div>
					<ul class="nav navbar-top-links navbar-right">
						<li>
							<span class="m-r-sm text-muted welcome-message">Bienvenido a Lubricar Deliver - Web.</span>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
								<i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
							</a>
							<ul class="dropdown-menu dropdown-messages">
								<li>
									<div class="dropdown-messages-box">
										<a href="profile.html" class="pull-left">
											<img alt="image" class="img-circle" src="img/a7.jpg">
										</a>
										<div class="media-body">
											<small class="pull-right">46h ago</small>
											<strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
											<small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="dropdown-messages-box">
										<a href="profile.html" class="pull-left">
											<img alt="image" class="img-circle" src="img/a4.jpg">
										</a>
										<div class="media-body ">
											<small class="pull-right text-navy">5h ago</small>
											<strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
											<small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="dropdown-messages-box">
										<a href="profile.html" class="pull-left">
											<img alt="image" class="img-circle" src="img/profile.jpg">
										</a>
										<div class="media-body ">
											<small class="pull-right">23h ago</small>
											<strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
											<small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="text-center link-block">
										<a href="mailbox.html">
											<i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
										</a>
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
								<i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
							</a>
							<ul class="dropdown-menu dropdown-alerts">
								<li>
									<a href="mailbox.html">
										<div>
											<i class="fa fa-envelope fa-fw"></i> You have 16 messages
											<span class="pull-right text-muted small">4 minutes ago</span>
										</div>
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="profile.html">
										<div>
											<i class="fa fa-twitter fa-fw"></i> 3 New Followers
											<span class="pull-right text-muted small">12 minutes ago</span>
										</div>
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="grid_options.html">
										<div>
											<i class="fa fa-upload fa-fw"></i> Server Rebooted
											<span class="pull-right text-muted small">4 minutes ago</span>
										</div>
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<div class="text-center link-block">
										<a href="notifications.html">
											<strong>See All Alerts</strong>
											<i class="fa fa-angle-right"></i>
										</a>
									</div>
								</li>
							</ul>
						</li>
			
			
						<li>
							<a href="<?php echo base_url();?>logout">
								<i class="fa fa-sign-out"></i> Cerrar Sesión
							</a>
						</li>
					</ul>
			
				</nav>
			</div>


			<div class="wrapper wrapper-content animated fadeInRight">
				<div class="row">
					<div class="col-lg-12">
						<div class="ibox float-e-margins m-t-xl">
							<div class="ibox-content text-center p-xl">
			
								<h2><span class="text-navy">Material Design Skin for Inspinia</span>
								<br/><small>Example view</small></h2>
			
								<p>
									If you want to apply Material Design Skin, all you need to do is to add 'md-skin' class to your open body tag, like this:
			
								</p>
								<pre class="text-left">
			
			&lt;body class="md-skin"&gt;&lt;/body&gt;
								</pre>
								<p>
									Additional in current demo we also enable fixed option for navbar and sidebar - more about fixed options you can find in documentation.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="footer">
				<div class="pull-right">
				   <!-- 10GB of <strong>250GB</strong> Free.-->
				</div>
				<div>
					<strong>Copyright</strong> Exampley Company &copy; 2017
				</div>
			</div>
		</div>
	</div>
	

	<!-- Mainly scripts -->
	<script src="<?php base_url() ?>assets/js/jquery-3.1.1.min.js"></script>
	<script src="<?php base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php base_url() ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script src="<?php base_url() ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- Custom and plugin javascript -->
	<script src="<?php base_url() ?>assets/js/inspinia.js"></script>
	<script src="<?php base_url() ?>assets/js/plugins/pace/pace.min.js"></script>
	
	<script src="<?php base_url() ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	

</body>
</html>
