<div class="page-contrainer"> 
	<div class="main-content">

		<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h3 class="panel-title">Modificar Recaudador</h3>
							<ul class="panel-tool-options"> 
								<li><a data-rel="reload" href="<?php echo base_url('Secretario/visualizarSocios')?>"><i class="icon-arrows-ccw"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
								<div class="table-responsive">
									<table id="example" class="table table-striped table-bordered table-hover dataTables-example">
									        <thead>
												<tr>
													<th>ID</th>
													<th>Nombre</th>
													<th>Rut</th>
													<th>Direccion</th>
													<th>Sector</th>
													<th>Fecha de Nacimiento</th>
													<th>Telefono</th>
													<th>Monto comprometido</th>
													<th>Fecha de Pago</th>
													<th>Estado</th>
												</tr>
									        </thead>
									       <tbody>
												<?php foreach ($socios as $sos): ?>
												<tr>
													<td><?php echo $sos->socio_id; ?></td>
													<td><?php echo $sos->socio_nombre; ?></td>
													<td><?php echo $sos->socio_rut; ?></td>
													<td><?php echo $sos->socio_direccion; ?></td>
													<td><?php echo $sos->socio_sector; ?></td>
													<td><?php echo $sos->socio_fecha_nacimiento; ?></td>
													<td><?php echo $sos->socio_telefono; ?></td>
													<td><?php echo $sos->socio_monto; ?></td>
													<td><?php echo $sos->socio_fech_pago; ?></td>
													<td><?php echo $sos->socio_estado; ?></td>
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
									 </table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
									