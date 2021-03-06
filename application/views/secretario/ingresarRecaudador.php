<div class="main-content">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<h3 class="panel-title">Ingresar Nuevo Recaudador</h3>
				</div>
				<div class="panel-body">
					 <form action="<?php echo base_url() ?>Secretario/guardar_recaudador" method="post" class="form-horizontal">
					 	<div class="form-group"> 
							<label class="col-sm-2 control-label">Nombre</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="text" placeholder="Nombre" class="form-control" name="Nombre" id="Nombre"> 
									<span class="input-group-addon"><i class="icon-user-add"></i></span>
								</div>
							</div> 
						</div>
						<div class="line-dashed"></div>
						<div class="form-group"> 
							<label class="col-sm-2 control-label">Apellido</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="text" placeholder="Apellido" class="form-control" name="Apellido" id="Apellido"> 
									<span class="input-group-addon"><i class="icon-user-add"></i></span>
								</div>
							</div> 
						</div>
						<div class="line-dashed"></div>
						<div class="form-group"> 
							<label class="col-sm-2 control-label">RUT</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="text" placeholder="Rut" class="form-control" name="Rut" id="Rut"> 
									<span class="input-group-addon"><i class="icon-vcard"></i></span>
								</div>
							</div> 
						</div>

						<div class="line-dashed"></div>
						<div class="form-group"> 
							<label class="col-sm-2 control-label">Contraseña</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="password" placeholder="Contraseña" class="form-control" name="password" id="password"> 
									<span class="input-group-addon"><i class="icon-vcard"></i></span>
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
								<button type="submit" class="btn btn-primary">Guardar Recaudador</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>