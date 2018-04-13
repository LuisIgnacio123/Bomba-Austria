<div class="page-contrainer"> 
	<div class="main-content">

		<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h3 class="panel-title">Modificar Recaudador</h3>
							<ul class="panel-tool-options"> 
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
								<div class="table-responsive">
									<table id="example" class="table table-striped table-bordered table-hover dataTables-example">
									    <thead>
											<tr>
												<th>RUT</th>
												<th>Recaudador</th>
												<th> Modificar</th>
											</tr>
									    </thead>
									    <tbody>
											<?php foreach ($usuarios as $us): ?>
											<tr>
												<td><?php echo $us->usuario_rut; ?></td>
												<td><?php echo $us->usuario_nombre; ?></td>
												<td>
													<form action="<?php echo base_url() ?>Secretario/editarRecaudador" method="post" class="form-horizontal">
														<input type="hidden" name="rut" value="<?php echo $us->usuario_rut; ?>">
														<input type="hidden" name="nombre" value="<?php echo $us->usuario_nombre; ?>">
														<button type="submit" class="btn btn-primary btn-outline">Modificar</button>
													</form>
												</td>
											</tr>
											<?php endforeach;?>
											<?php if(!$usuarios): ?>
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



