<div class="main-content">

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<h3 class="panel-title">Ingresar Nuevo Pago</h3>
				</div>
				<div class="panel-body">
					 <form action="<?php echo base_url() ?>Recaudador/guardar" method="post" class="form-inline" role ="form">
					 	<div class="form-group"> 
							<label class="col-sm-4 control-label">Número de Talonario</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="text" placeholder="Talonario" class="form-control" name="Talonario" id="Talonario"> 
								</div>
							</div> 
						</div>
					 	<div class="form-group"> 
							<label class="col-sm-4 control-label">Número de Boleta</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="text" placeholder="Boleta" class="form-control" name="Boleta" id="Boleta"> 
								</div>
							</div> 
						</div>
						<br><br><br>
						<div class="form-group"> 
							<label class="col-sm-4 control-label">Id Socio</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="text" placeholder="Id Socio" class="form-control" name="socio_id" id="id_socio"> 
								</div>
							</div> 
						</div>


						<div class="line-dashed"></div>
						<div class="form-group"> 
							<label class="col-sm-3 control-label">Nombre Socio</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="text" placeholder="N_Socio" class="form-control" name="N_Socio" id="N_Socio"> 
								</div>
							</div> 
						</div>
						<div class="form-group"> 
							<label class="col-sm-3 control-label">Dirección</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="text" placeholder="Dirección" class="form-control" name="Direccion" id="Direccion"> 
									<span class="input-group-addon"><i class="icon-direction"></i></span>
								</div>
							</div> 
						</div>

						<div class="form-group"> 
							<label class="col-sm-3 control-label">Sector</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="text" placeholder="Sector" class="form-control" name="Sector" id="Sector"> 
								</div>
							</div> 
						</div>

						<div class="line-dashed"></div>
						<div class="form-group"> 
							<label class="col-sm-4 control-label">Nombre Recaudador</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="text" placeholder="N_Recaudador" class="form-control" name="N_Recaudador" id="N_Recaudador"> 
									<span class="input-group-addon"><i class="icon-mail"></i></span>
								</div>
							</div> 
						</div>
						<div class="line-dashed"></div>
						<div class="form-group"> 
							<label class="col-sm-4 control-label">Fecha de Pago</label> 
							<div class="col-sm-4"> 
								<div id="date-popup" class="input-group date"> 
									<input type="text" data-format="D, dd MM yyyy" class="form-control"> 
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
								</div>
							</div> 
						</div>

						<div class="form-group"> 
							<label class="col-sm-4 control-label">Fehca Fin</label> 
							<div class="col-sm-6"> 
								<div id="date-popup1" class="input-group date"> 
									<input type="text" data-format="D, dd MM yyyy" class="form-control"> 
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
								</div>
							</div> 
						</div>

						<div class="line-dashed"></div>
						<div class="form-group"> 
							<label class="col-sm-2 control-label">Monto</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="number" placeholder="Monto a pagar" class="form-control" readonly="" name="Monto" id="Monto"> 
									<span class="input-group-addon"><i class="icon-paypal"></i></span>
								</div>
							</div> 
						</div>
						<div class="line-dashed"></div>
						<?php if ($this->session->flashdata('query')): ?>
							<div class="alert <?php echo $this->session->flashdata('query_alert'); ?>">
								<a class="close" data-dismiss="alert" href="#" aria-hidden="true">×</a>
								<?php echo $this->session->flashdata('query'); ?>
							</div>
						<?php endif;?>
						<div class="form-group">
							<div class="col-sm-10c	ol-sm-offset-2">
								<button type="reset" class="btn btn-white">Cancelar</button>
								<button type="submit" class="btn btn-primary">Guardar Socio</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>