			<!-- Footer -->
			<footer class="footer-main"> 
				&copy; 2017 <strong>Bomba Austria</strong> by Luis</a> 
			</footer>	
			<!-- /footer -->
		
	  </div>
	  <!-- /main content -->
	  
  </div>
  <!-- /main container -->
  
</div>
<!-- /page container -->


<!--Load JQuery-->
<script src="<?php echo base_url()?>/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/metismenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/blockui-master/jquery-ui.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/blockui-master/jquery.blockUI.js"></script>
<script src="<?php echo base_url()?>/assets/js/functions.js"></script>

<script src="<?php echo base_url()?>/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/datatables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/datatables/jszip.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/datatables/extensions/Buttons/js/buttons.html5.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/datatables/extensions/Buttons/js/buttons.colVis.js"></script>
<script>
	$(document).ready(function () {
		$('.dataTables-example').DataTable({
			dom: '<"html5buttons" B>lTfgitp',
			buttons: [
				{
					extend: 'copyHtml5',
					exportOptions: {
						columns: [ 0, ':visible' ]
					}
				},
				{
					extend: 'excelHtml5',
					exportOptions: {
						columns: ':visible'
					}
				},
				{
					extend: 'pdfHtml5',
					exportOptions: {
						columns: [ 0, 1, 2, 3, 4 ]
					}
				},
				'colvis'
			]
		});
	});
</script>
</body>
</html>
