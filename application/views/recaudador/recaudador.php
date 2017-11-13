<!-- Main content -->
<div class="main-content">
	<h1 class="page-title">Recaudador</h1>
	<!-- Main content -->
	<div class="main-content-20">
		<h1 class="page-title"></h1>
			<div class="row"> 
				<div class="col-lg-12"> 
					<!-- panel--> 
					<div class="panel panel-default">
						<div class="panel-heading clearfix"> 
							<div class="panel-title">Recaudador</div> 
							<ul class="panel-tool-options"> 	
								<li><a data-rel="reload" href="<?php echo base_url()?>Recaudador"><i class="icon-arrows-ccw"></i></a></li>
							</ul> 
						</div> 
						<!-- panel body --> 
						<div class="panel-body"> 
							<div class="flot-chart">
								<div id="flot-bar-chart" class="flot-chart-content"></div>
							</div>
						</div> 
					</div> 
				</div> 
		</div>
	</div>
</div>

SELECT boletas.boleta_aporte, boletas.boleta_mes FROM boletas 
INNER JOIN talonarios ON boletas.boleta_talonario = talonarios.talonario_id 
INNER JOIN usuarios ON talonarios.talonario_recaudador = usuarios.usuario_id 
INNER JOIN privilegios ON usuarios.usuario_privilegio = privilegios.privilegio_id