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
<!--Float Charts-->
<script src="<?php echo base_url()?>/assets/js/plugins/flot/jquery.flot.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/flot/jquery.flot.selection.min.js"></script>        
<script src="<?php echo base_url()?>/assets/js/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/flot/jquery.flot.time.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/functions.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/flot/jquery.flot.canvas.min.js"></script>

<!--ChartJs-->
<script src="<?php echo base_url()?>/assets/js/plugins/flot/flot-script.js"></script>
<!-- DatePicker-->
<script src="<?php echo base_url()?>/assets/js/plugins/datepicker/bootstrap-datepicker.js"></script>

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
		//Flot Bar Chart
		$(function () {
		    var barOptions = {
		        series: {
		            bars: {
		                show: true,
		                barWidth: 0.6,
		                fill: true,
		                fillColor: {
		                    colors: [{
		                            opacity: 0.8
		                        }, {
		                            opacity: 0.8
		                        }]
		                }
		            }
		        },
		        xaxis: {
		            tickDecimals: 0,
					font: {
		                weight: "bold"
		            },
					color: "#e5e4ea",
					tickColor: "#364064"
		        },
				yaxis: {
					tickColor: "#364064",
					font: {
		                weight: "bold"
		            },
					color: "#e5e4ea"
		        },
		        colors: ["#00B8CE"],
		        grid: {
		            color: "#999999",
		            hoverable: true,
		            clickable: true,
		            tickColor: "#D4D4D4",
		            borderWidth: 0
		        },
		        legend: {
		            show: false
		        },
		        tooltip: true,
		        tooltipOpts: {
		            content: "x: %x, y: %y"
		        }
		    };
		    var barData = {
		        label: "bar",
		        data: [
		            [1, 50],
		            [2, 25],
		            [3, 19],
		            [4, 34],
		            [5, 32],
		            [6, 44]
		        ]
		    };
		    $.plot($("#flot-bar-chart"), [barData], barOptions);

		});
		
	});

</script>
</body>
</html>