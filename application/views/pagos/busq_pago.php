<!-- Main content -->
<div class="main-content">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<h3 class="panel-title">Información de Clientes</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example" >
							<thead>
								<tr>
									<th>Fecha</th>
									<th>Cliente</th>
									<th>Servicios</th>
									<th>Monto</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($pagos as $pag): ?>
									<tr>
										<td><?php echo date("M-d-Y", strtotime($pag->pago_fecha)); ?></td>
										<td><?php echo $pag->pago_cliente; ?></td>
										<td><?php echo $pag->servicio_nombre; ?></td>
										<td><?php echo $pag->pago_monto; ?></td>
									</tr>
								<?php endforeach;?>
								<?php if(!$pagos): ?>
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
									<th>Fecha</th>
									<th>Cliente</th>
									<th>Servicios</th>
									<th>Monto</th>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>