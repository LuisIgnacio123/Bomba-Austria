<div class="main-content">

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<h3 class="panel-title">Ingresar Recibo a Anular</h3>
				</div>
				<div class="panel-body">
					 <form action="<?php echo base_url() ?>Recaudador/anular" method="post" class="form-horizontal">
						<div class="form-group"> 
							<label class="col-sm-2 control-label">Ingresar Número Recibo</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="text" placeholder="Recibo" class="form-control" name="recibo" id="recibo" onblur="buscar_recibo(this)"> 
									<span class="input-group-addon"><i class="icon-user-add"></i></span>
								</div>
							</div> 
						</div>
						<div class="line-dashed"></div>
					 	<div class="form-group"> 
							<label class="col-sm-2 control-label">Número Talonario</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="text" placeholder="Talonario" class="form-control" name="talonario" id="talonario" disabled=""> 
									<span class="input-group-addon"><i class="icon-user-add"></i></span>
								</div>
							</div> 
						</div>
						<div class="row">
							<div class="form-group">
								<div class="line-dashed"></div>
								<div class="form-group"> 
									<label class="col-sm-2 control-label">Nombre Socio</label> 
									<div class="col-sm-2"> 
										<div class="input-group"> 
											<input type="text" placeholder="Nombre Socio" class="form-control" name="socio_nombre" id="socio_nombre" disabled="">
										</div>
									</div> 

									<label class="col-sm-2 control-label">Fecha Pago</label> 
									<div class="col-sm-2"> 
										<div class="input-group"> 
											<input type="date" placeholder="Fecha de Pago" class="form-control" name="F_pago" id="F_pago" readonly=""> 
										</div>
									</div> 
								</div>
								<br><br><br>
								<div class="form-group"> 
									<label class="col-sm-2 control-label">Monto</label> 
									<div class="col-sm-2"> 
										<div class="input-group"> 
											<input type="number" placeholder="Monto" class="form-control" name="monto" id="monto" disabled=""> 
										</div>
									</div> 

									<label class="col-md-2 control-label">Dirección</label> 
									<div class="col-md-2"> 
										<div class="input-group"> 
											<input type="text" placeholder="Dirección" class="form-control" name="direccion" id="direccion" disabled=""> 
										</div>
									</div> 
								</div>
								<br><br><br>
								<div class="form-group"> 
									<label class="col-md-2 control-label">Sector</label> 
									<div class="col-md-2"> 
										<div class="input-group"> 
											<input type="text" placeholder="Sector" class="form-control" name="sector" id="sector" disabled=""> 
										</div>
									</div> 
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
							<div class="col-sm-4 col-sm-offset-2">
								<button type="reset" class="btn btn-white">Cancelar</button>
								<button type="submit" class="btn btn-primary">Anular Recibo</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>