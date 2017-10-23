<!-- Main container -->
  <div class="main-container">
  
		<!-- Main header -->
		<div class="main-header row">
		  <div class="col-sm-6 col-xs-7 pull-right">
		  
			<!-- User info -->
			<ul class="user-info pull-right">          
			  <li class="profile-info dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> <img width="44" class="img-circle avatar" alt="" src="<?php echo base_url('assets/images/man-3.jpg')?>"><?php echo $this->session->userdata('login_nombre')?><span class="caret"></span></a>
			  
				<ul class="dropdown-menu">
				  <li><a href="<?php echo base_url('Login/salir') ?>"><i class="icon-logout"></i>Cerrar Sesión</a></li>
				</ul>
			  </li>
			</ul>
			<!-- /user info -->
			
		  </div>
		</div>
		<!-- /main header -->