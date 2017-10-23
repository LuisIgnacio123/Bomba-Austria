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
			<li id="dashboard" class=""><a href="<?php echo base_url('Recaudador')?>"><i class="icon-gauge"></i><span class="title">Dashboard</span></a></li>
			<li id="pagos" class="has-sub"><a href="<?php echo base_url('Recaudador/index2')?>"><i class="icon-credit-card"></i><span class="title">Realizar Pago del mes</span></a>
				<ul id="navPagos" class="nav collapse"> <!-- nav -->
					<li id="realizarPago" class=""><a href="<?php echo base_url('Recaudador/realizarPago')?>"><span class="title">Realizar Pago</span></a></li>
				</ul>
			</li>


			<li id="pagos" class="has-sub"><a href="<?php echo base_url('')?>"><i class="icon-credit-card"></i><span class="title">Ingresar Socio Cooperador</span></a>
				<ul id="navPagos" class="nav collapse"> <!-- nav -->
					<li id="realizarPago" class=""><a href="<?php echo base_url('Recaudador/ingresarSocio')?>"><span class="title">Ingresar Socio Cooperador</span></a></li>
				</ul>
			</li>

			<li id="pagos" class="has-sub"><a href="<?php echo base_url('')?>"><i class="icon-credit-card"></i><span class="title">Anular Recibo</span></a>
				<ul id="navPagos" class="nav collapse"> <!-- nav -->
					<li id="realizarPago" class=""><a href="<?php echo base_url('Recaudador/anularBoleta')?>"><span class="title">Anular Recibo</span></a></li>
				</ul>
			</li>

		</ul>
		<!-- /main navigation -->	
  </div>
  <!-- /page sidebar -->
