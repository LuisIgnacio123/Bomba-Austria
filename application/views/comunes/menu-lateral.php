<!-- <body oncontextmenu="return false" onkeydown="return false"> -->
<body>

<!-- Page container -->
<div class="page-container">

	<!-- Page Sidebar -->
	<div class="page-sidebar">
	
		<!-- Site header  -->
		<header class="site-header">
		<!--  <div class="site-logo"><a href=""><img src="<?php echo base_url('assets/images/logo-bomba.jpg')?>" alt="Mouldifi" title="Mouldifi"></a></div> -->
		  <div class="site-logo"><a href=""><img src="<?php echo base_url('assets/images/logo-bomba.jpg')?>" alt="Telemas" title="Telemas"></a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header>
		<!-- /site header -->
		
		<!-- Main navigation -->
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
			<li id="dashboard" class=""><a href="<?php echo base_url('Inicio')?>"><i class="icon-gauge"></i><span class="title">Dashboard</span></a></li>
			<li id="socios" class=""><a href="<?php echo base_url('Socios')?>"><i class="icon-layout"></i><span class="title">Socios</span></a></li>
			<li id="pagos" class="has-sub"><a href="<?php echo base_url('Pagos')?>"><i class="icon-credit-card"></i><span class="title">Pagos</span></a>
				<ul id="navPagos" class="nav collapse"> <!-- nav -->
					<li id="realizarPago" class=""><a href="<?php echo base_url('Pagos')?>"><span class="title">Realizar Pago</span></a></li>
					<li id="busquedaPago" class=""><a href="<?php echo base_url('Pagos')?>"><span class="title">Búsqueda de Pagos</span></a></li>
				</ul>
			</li>
			<li id="configuracion" class="has-sub"><a href="<?php echo base_url('Configuracion')?>"><i class="icon-briefcase"></i><span class="title">Panel de Control</span></a>
				<ul id="navConfiguracion" class="nav collapse">
					<li><a href="<?php echo base_url('Empleados')?>"><span class="title">Empleados</span></a></li>
				</ul>
			</li>
		</ul>
		<!-- /main navigation -->		
  </div>
  <!-- /page sidebar -->
