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
								<table class="table table-striped table-bordered table-hover datatable">
									<thead>
										<tr>
											<th>RUT</th>
											<th>Recaudador</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($usuarios as $us): ?>
										<tr>
											<td><?php echo $us->usuario_rut; ?></td>
											<td><?php echo $us->usuario_nombre; ?></td>
											<td> boton </td>
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
									<tr></tr>
							</table>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
