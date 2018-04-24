			<!-- Footer -->
			<footer class="footer-main"> 
				&copy; 2017 <strong>Bomba Austria</strong> by Luis Aguilera Vera</a> 
			</footer>	
			<!-- /footer -->
		
	  </div>
	  <!-- /main content -->
	  
  </div>
  <!-- /main container -->
  
</div>
<!-- /page container -->

<!--Load JQuery-->
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/metismenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/blockui-master/jquery-ui.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/blockui-master/jquery.blockUI.js"></script>


<!--<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>-->

<!--DataTables-->
<script src="<?php echo base_url()?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/datatables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/datatables/jszip.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/datatables/extensions/Buttons/js/buttons.html5.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/datatables/extensions/Buttons/js/buttons.colVis.js"></script>

<!--Float Charts-->
<script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.selection.min.js"></script>        
<script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.time.min.js"></script>
<script src="<?php echo base_url()?>assets/js/functions.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.canvas.min.js"></script>
<script src="<?php echo base_url()?>assets/js/autorrelleno.js"></script>

<!--ChartJs-->
<script src="<?php echo base_url()?>assets/js/flot.js"></script>

<!-- DatePicker-->
<script src="<?php echo base_url()?>assets/js/plugins/datepicker/bootstrap-datepicker.js"></script>



<script>
	$(document).ready(function () {

		$('#example').DataTable({
			dom: 'Bfrtip',
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
						columns: [ 0, 1]
					}
				},
				'colvis'
			]
		});

		
		$('#datepicker').datepicker({
			keyboardNavigation: false,
			forceParse: false,
			todayHighlight: true  
		});

		$('#date-popup').datepicker({
			keyboardNavigation: false,
			forceParse: false,
			todayHighlight: true,
			format: "dd/mm/yyyy"
		});

		$('#date-popup1').datepicker({
			keyboardNavigation: false,
			forceParse: false,
			todayHighlight: true,
			format: "dd/mm/yyyy"
		});

		var dragFixed = document.getElementById('drag-fixed');
		noUiSlider.create(dragFixed, {
			start: [40, 60],
			behaviour: 'drag-fixed',
			connect: true,
			range: {
				'min': 20,
				'max': 80
			}
		});


		var $checkbox = $('.todo-list .checkbox input[type=checkbox]');

		$checkbox.change(function () {
			if ($(this).is(':checked')) {
				$(this).parent().addClass('checked');
			} else {
				$(this).parent().removeClass('checked');
			}
		});

		$checkbox.each(function (index) {
			if ($(this).is(':checked')) {
				$(this).parent().addClass('checked');
			} else {
				$(this).parent().removeClass('checked');
			}
		});
	});

</script>
<script>
	$(document).ready(function() {
    	
	});
</script>
</body>
</html>