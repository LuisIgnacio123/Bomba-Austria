<!DOCTYPE html>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->

<!--[if lte IE 8]>
	<script src="js/plugins/flot/excanvas.min.js"></script>
<![endif]-->
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
<title>Bomba Austria</title>

<?php if (!$this->session->userdata('login_estado')) {
    redirect(base_url('Login'));
}
?>

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

<link href="<?php echo base_url()?>/assets/css/plugins/datatables/jquery.dataTables.css" rel="stylesheet">
<link href="<?php echo base_url()?>/assets/js/plugins/datatables/extensions/Buttons/css/buttons.dataTables.css" rel="stylesheet">


<link href="<?php echo base_url()?>/assets/css/plugins/datepicker/bootstrap-datepicker.css" rel="stylesheet">
<link href="<?php echo base_url()?>/assets/css/plugins/colorpicker/bootstrap-colorpicker.css" rel="stylesheet">
<!--<link href="<?php echo base_url()?>/assets/css/plugins/nouislider/nouislider.css" rel="stylesheet">
<link href="<?php echo base_url()?>/assets/css/plugins/select2/select2.css" rel="stylesheet">-->
<link href="<?php echo base_url()?>/assets/css/mouldifi-forms.css" rel="stylesheet" >
<link href="<?php echo base_url()?>assests/css/plugins/datatables/jquery.dataTables.css" rel="stylesheet">


<script type="text/javascript">
	var base_url = "<?php echo base_url();?>"
</script>
</head>
