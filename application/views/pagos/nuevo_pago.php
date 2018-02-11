<div class="main-content">
	<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h3 class="panel-title">Ingresar Nuevo Pago</h3>

					</div>

					<div class="panel-body">
						 <form class="form-horizontal" id="pago" name="pago" action="<?php echo base_url() ?>Recaudador/guardarpago" method="post" role ="form">
						 	<div class="form-group"> 
								<label class="col-sm-2 control-label">Número de Talonario</label> 
								<div class="col-sm-10"> 
									<input type="text" placeholder="Número de Talonario" class="form-control" name='Talonario' id='Talonario'> 
								</div> 
							</div>

							<br>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Número de Boleta</label> 
								<div class="col-sm-10"> 
									<input type="text" placeholder="Número de Boleta" class="form-control" name='Boleta' id='Boleta'> 
								</div> 
							</div>
							<br>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Nombre Recaudador</label> 
								<div class="col-sm-10"> 
									<input type="text" placeholder="Nommbre Recaudador" class="form-control" id='N_Recuadador' name='N_Recuadador'> 
								</div> 
							</div>
							<br>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Id Socio</label> 
								<div class="col-sm-10"> 
									<input type="text" placeholder="ID Socio" class="form-control" name='socio_id' id='socio_id' onblur="buscar_IDsocio(this)"> 
								</div> 
							</div>
							<br>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Nombre Socio</label> 
								<div class="col-sm-10"> 
									<input type="text" placeholder="Nombre Socio" class="form-control" name='N_Socio' id='N_Socio' onblur="buscar_Nombresocio(this)"> 
								</div> 
							</div>
							<br>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Dirección Socio</label> 
								<div class="col-sm-10"> 
									<input type="text" placeholder="Dirección Socio" class="form-control" name='Direccion' id='Direccion' onblur="buscar_Dirsocio(this)"> 
								</div> 
							</div>
							<br>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Sector</label> 
								<div class="col-sm-10"> 
									<input type="text" placeholder="Sector" class="form-control" name="sector" id="sector"> 
								</div> 
							</div>
							<br>
							<div class="line-dashed"></div>
								<div class="form-group"> 
									<label class="col-sm-3 control-label">Fecha de Pago</label> 
									<div class="col-sm-6"> 
										<div id="date-popup" class="input-group date"> 
											<input type="text" data-format="D, dd MM yyyy" class="form-control" id="FechaPago" name="FechaPago"> 
											<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
										</div>
									</div> 
								</div>


								<br><br>

							<div class="form-group"> 
								<label class="col-sm-2 control-label">Cantidad de meses</label> 
								<div class="col-sm-10"> 
									<input type="number" placeholder="Cantidad de meses" class="form-control" name='meses' id='meses'> 
								</div> 
							</div>

							<br><br>

							<div class="form-group"> 
								<label class="col-sm-2 control-label">Monto</label> 
								<div class="col-sm-10"> 
									<input type="number" placeholder="Monto" class="form-control" name='Monto' id='Monto'> 
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
								<button type="submit" class="btn btn-primary">Guardar Pago</button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>





	<!--<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<h3 class="panel-title">Ingresar Nuevo Pago</h3>
				</div>
				<div class="panel-body">
					 <form id="pago" name="pago" action="<?php echo base_url() ?>Recaudador/guardarpago" method="post" class="form-inline" role ="form">
					 	<div class="form-group col-sm-3"> 
							<label class="col-sm-6 control-label">Número de Talonario</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="text" placeholder="Talonario" class="form-control" name="Talonario" id="Talonario"> 
								</div>
							</div> 
						</div>
					 	<div class="form-group col-sm-3"> 
							<label class="col-sm-6 control-label">Número de Boleta</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="text" placeholder="Boleta" class="form-control" name="Boleta" id="Boleta"> 
								</div>
							</div> 
						</div>

						<div class="form-group col-sm-3"> 
							<label class="col-sm-4 control-label">Nombre Recaudador</label> 
							<div class="col-sm-12"> 
								<div class="input-group"> 
									<input type="text" placeholder="N_Recaudador" class="form-control" name="N_Recaudador" id="N_Recaudador"> 
								</div>
							</div> 
						</div>
						<br><br><br><br><br><br><br>
						<div class="form-group"> 
							<label class="col-sm-6 control-label">Id Socio</label> 
							<div class="col-sm-12"> 
								<div class="input-group"> 
									<input type="text" placeholder="Id Socio" class="form-control" name="socio_id" id="socio_id"> 
								</div>
							</div> 
						</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="form-group">
							<label class="col-sm-6 control-label">Nombre Socio</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="text" placeholder="N_Socio" class="form-control" name="N_Socio" id="N_Socio"/> 
								</div>
							</div> 
						</div>
						<br><br><br>
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
							<label class="col-sm-3 control-label">Fecha de Pago</label> 
							<div class="col-sm-6"> 
								<div id="date-popup" class="input-group date"> 
									<input type="text" data-format="D, dd MM yyyy" class="form-control" id="FechaPago" name="FechaPago"> 
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
								</div>
							</div> 
						</div>

						<div class="form-group"> 
							<label class="col-sm-3 control-label">Fehca Fin</label> 
							<div class="col-sm-6"> 
								<div id="date-popup1" class="input-group date"> 
									<input type="text" data-format="D, dd MM yyyy" class="form-control" id="FechaFin" name="FechaFin"> 
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
								</div>
							</div> 
						</div>

						<div class="line-dashed"></div>
						<div class="form-group"> 
							<label class="col-sm-2 control-label">Monto</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="number" placeholder="Monto a pagar" class="form-control" name="Monto" id="Monto"> 
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
								<button type="submit" class="btn btn-primary">Guardar Pago</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>-->
