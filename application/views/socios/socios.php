<!-- Main content -->
<div class="main-content">
	<div class="row">
		<div class="col-md-12"> 
			<div class="panel panel-default shadowless">
				<div class="panel-heading clearfix"> 
					<h3 class="panel-title">Nuevo Socio</h3> 
					<ul class="panel-tool-options"> 
						<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
					</ul>  
				</div> 
				<!-- panel body --> 
				<div class="panel-body"> 
					<form action="<?php echo base_url('SocioNuevo')?>">
						<div class="form-group">
							<button class="btn btn-primary btn-lg btn-block" href="<?php echo base_url('SocioNuevo')?>">Ingresar Nuevo Socio</button>
						</div>
					</form>
				</div> 
			</div> 
		</div>
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<h3 class="panel-title">Información de Socio</h3>
					<ul class="panel-tool-options"> 
						<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
						<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
					</ul>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example" >
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Rut</th>
									<th>Dirección</th>
									<th>Teléfono</th>
									<th>Monto</th>
									<th>Fecha de nacimiento </th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($socios as $so): ?>
									<tr class="<?php echo ($so->socio_estado == 0) ? 'text-muted' : ''; ?>">
										<td><?php echo ($so->socio_estado == 0) ? '<s>' : ''; ?>
											<?php echo $so->socio_nombre; ?>
											<?php echo ($so->socio_estado == 0) ? '</s>' : ''; ?>
										</td>
										<td><?php echo $so->socio_rut; ?></td>
										<td><?php echo $so->socio_direccion; ?></td>
										<td href="tel:<?php echo $so->socio_telefono; ?>"><?php echo $so->socio_telefono; ?></td>
										<td><?php echo $so->socio_monto; ?></td>
										<td><?php echo $so->socio_fecha_nac;?></td>
									</tr>
								<?php endforeach;?>
								<?php if(!$socios): ?>
									<tr>
										<td>No hay datos</td>
										<td>-</td>
										<td>-</td>
										<td>-</td>
									</tr>
								<?php endif;?>
							</tbody>
							<tr></tr>
							<tfoot>
								<tr>
									<th>Nombre</th>
									<th>Rut</th>
									<th>Dirección</th>
									<th>Teléfono</th>
									<th>Monto</th>
									<th>Fecha de nacimiento </th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>