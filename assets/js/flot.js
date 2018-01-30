//Flot Bar Chart
$(function () {
    $.ajax({
        type: "post",
        url: base_url + "/Recaudador/graficar",

        success: function(respuesta){
            $data = jQuery.parseJSON(respuesta);
            //var $totalmes8 = 0;
            var $mes = ['0','1','2','3','4','5','6','7','8','9','10','11'];
            var $totalmes1 = 0;
            var $totalmes2 = 0;
            var $totalmes3 = 0;
            var $totalmes4 = 0;
            var $totalmes5 = 0;
            var $totalmes6 = 0;
            var $totalmes7 = 0;
            var $totalmes8 = 0;
            var $totalmes9 = 0;
            var $totalmes10 = 0;
            var $totalmes11 = 0;
            var $totalmes12 = 0;

            var f = new Date();
            for (var i = 0; i < $data.length; i++) {
                var $fecha = $data[i].boleta_fecha;
                var $fecha_mes = $fecha.split('-');
                var $Fecha = f.getDate() + "-" + (f.getMonth() + 1) + "-" + f.getFullYear();
                var $Fecha_aux = $Fecha.split("-");

                for (var j = $fecha_mes[0]; j <= $Fecha_aux[2]; j++) {
                    //console.log($fecha_mes[0] + " " +  $fecha_mes[1]);
                //if ($fecha_mes[0] == $Fecha_aux[2]) {
                    //console.log($Fecha_aux[2]);
                    var $option = parseInt($fecha_mes[1]);
                    //console.log($option);
                    switch($option){
                        case 1:
                            $totalmes1 += parseInt($data[i].boleta_aporte);
                            break;
                        case 2:
                            $totalmes2 += parseInt($data[i].boleta_aporte);
                            break;
                        case 3:
                            $totalmes3 += parseInt($data[i].boleta_aporte);
                            break;
                        case 4:
                            $totalmes4 += parseInt($data[i].boleta_aporte);
                            break;
                        case 5:
                            $totalmes5 += parseInt($data[i].boleta_aporte);
                            break;
                        case 6:
                            $totalmes6 += parseInt($data[i].boleta_aporte);
                            break;
                        case 7:
                            $totalmes7 += parseInt($data[i].boleta_aporte);
                            break;
                        case 8: 
                            $totalmes8 += parseInt($data[i].boleta_aporte);
                            break;
                        case 9:
                            $totalmes9 += parseInt($data[i].boleta_aporte);
                            break;
                        case 10:
                            $totalmes10 += parseInt($data[i].boleta_aporte);
                            break;
                        case 11:
                            $totalmes11 += parseInt($data[i].boleta_aporte);
                            break;
                        case 12:
                            $totalmes12 += parseInt($data[i].boleta_aporte);
                            $fecha = j;
                            break;
                    }
                }
            }

             var ticks = [[0,'Enero ' + $fecha_mes[0]], [1,'Febrero ' + $fecha_mes[0]],[2,'Marzo'],[3,'Abril'],[4,'Mayo'],[5,'Junio'],[6,'Julio'],[7,'Agosto'],[8,'Septiembre'],
                         [9,'Octubre'], [10, 'Noviembre '], [11, 'Diciembre ']];

             var barData = {
             label: "bar",
             data: [
                 [$mes[0], $totalmes1],
                 [$mes[1], $totalmes2],
                 [$mes[2], $totalmes3],
                 [$mes[3], $totalmes4],
                 [$mes[4], $totalmes5],
                 [$mes[5], $totalmes6],
                 [$mes[6], $totalmes7],
                 [$mes[7], $totalmes8],
                 [$mes[8], $totalmes9],
                 [$mes[9], $totalmes10],
                 [$mes[10], $totalmes11],
                 [$mes[11], $totalmes12]
             ]
         };
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

            bars: {
                align: "center",
                barWidth: 0.5

            },
            xaxis: {
                axisLabel: "$",
                tickDecimals: 0,
                font: {
                    weight: "bold"
                },
                color: "#e5e4ea",
                tickColor: "#364064",
                ticks: ticks
            },
            yaxis: {
                axisLabel: "Meses",
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
                content: "Mes: %x, Monto: %y"
            }
        };


        $.plot($("#flot-bar-chart"), [barData], barOptions);
        }
    })

    

});