<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
<title>Bomba Austria | Login</title>

<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url('assets/images/favicon.ico')?>' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="<?php echo base_url()?>/assets/css/entypo.css" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="<?php echo base_url()?>/assets/css/font-awesome.min.css" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Mouldifi core stylesheet -->
<link href="<?php echo base_url()?>/assets/css/mouldifi-core.css" rel="stylesheet">
<!-- /mouldifi core stylesheet -->

<link href="<?php echo base_url()?>/assets/css/mouldifi-forms.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->


</head>
<body class="login-page">
<div class="login-container">
	<div class="login-branding">
		<a href="index.html"><img src="<?php echo base_url()?>/assets/images/bomba.png" alt="Mouldifi" title="Mouldifi"></a>
	</div>
	<div class="login-content">
		<h2><strong>Bienvenido</strong>, logueate para continuar</h2>
		<form method="post" action="<?php echo base_url('Login/validar') ?>">  
			<input type="hidden" name="token" value="<?php echo $token ?>">                      
			<div class="form-group">
				<input type="text" placeholder="Username" class="form-control" id="username" name="username" tabindex="1">
			</div>                        
			<div class="form-group">
				<input type="password" placeholder="Password" class="form-control" id="password" name="password" tabindex="2">
			</div>
			<!--
			<div class="form-group">
				 <div class="checkbox checkbox-replace">
					<input type="checkbox" id="remeber">
					<label for="remeber">Mantener sesión activa</label>
				  </div>
			 </div>
			 -->
			<div class="form-group">
				<button class="btn btn-primary btn-block">Iniciar sesión</button>
			</div>
			<?php if ($this->session->flashdata('query')): ?>
				<div class="alert <?php echo $this->session->flashdata('query_alert'); ?>">
					<a class="close" data-dismiss="alert" href="#" aria-hidden="true">×</a>
					<?php echo $this->session->flashdata('query'); ?>
				</div>
			<?php endif;?>
			<p class="text-center"><a href="<?php echo base_url('Login/password_recuperar') ?>">He olvidado mi contraseña</a></p>                        
		</form>
	</div>
</div>


<!--Load JQuery-->
<script src="<?php echo base_url()?>/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
</body>
</html>
