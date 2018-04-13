<div class="main-content">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<h3 class="panel-title">Ingresar Nuevo Recaudador</h3>
				</div>
				<div class="panel-body">
					<form action="<?php echo base_url() ?>Secretario/actualizar_recaudador" method="post" class="form-horizontal">
						<div class="form-group"> 
							<label class="col-sm-2 control-label">Rut</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="text" class="form-control" name="rut" id="rut" value="<?php print_r($dataEdit_RUT);?>">
								</div>
							</div> 
						</div>
							<br><br><br>
						 <div class="form-group"> 
							<label class="col-sm-2 control-label">Nombre</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="text" class="form-control" name="nombre" id="nombre" value="<?php print_r($dataEdit_Name);?>">
								</div>
							</div> 
						</div>
						<br><br><br>
						<div class="form-group"> 
							<label class="col-sm-2 control-label">Privilegios</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<input type="text" class="form-control" name="privilegio" id="privilegio" value="<?php print_r($dataEdit_Privilege);?>">
								</div>
							</div> 
						</div>
						<br><br><br>
						<div class="form-group"> 
							<label class="col-sm-2 control-label">Estado</label> 
							<div class="col-sm-10"> 
								<div class="input-group"> 
									<select name="estado" class="form-control">
										<option value="1">Activo</option>
										<option value="0">Inactivo</option>
									</select>
									<!--<input type="text" placeholder="" class="form-control" name="estado" id="estado" value="<?php print_r($dataEdit_State);?>">-->
								</div>
							</div> 
						</div>
						<br><br><br>
						<div class="form-group">
							<div class="col-sm-4 col-sm-offset-2">
								<button type="reset" class="btn btn-white">Cancelar</button>
								<button type="submit" class="btn btn-primary">Guardar Socio</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
		