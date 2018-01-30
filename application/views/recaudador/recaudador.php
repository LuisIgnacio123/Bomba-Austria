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
							<div class="panel-title">Recaudador
								<script>
									var f = new Date();
									document.write(f.getDate() + "/" + (f.getMonth() + 1) + "/" + f.getFullYear());
								</script>
							</div> 
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
