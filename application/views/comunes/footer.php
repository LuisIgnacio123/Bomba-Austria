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
<!--Float Charts-->
<script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.selection.min.js"></script>        
<script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.time.min.js"></script>
<script src="<?php echo base_url()?>assets/js/functions.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.canvas.min.js"></script>

<!--ChartJs-->
<!--<script src="<?php echo base_url()?>/assets/js/plugins/flot/flot-script.js"></script>-->
<script src="<?php echo base_url()?>assets/js/flot.js"></script>

<!-- DatePicker-->
<script src="<?php echo base_url()?>assets/js/plugins/datepicker/bootstrap-datepicker.js"></script>

<!-- Nemixs colaborations -->
<script src="<?php echo base_url()?>assets/js/autorrelleno.js"></script>

<script>
	$(document).ready(function () {
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
</body>
</html>