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

    $.ajax({
        type: "post",
        url: base_url + "/Recaudador/graficar",

        success: function(respuesta){
            console.log(respuesta);

            var barData = {
            label: "bar",
            data: [
                [1, 90],
                [2, 35],
                [3, 29],
                [4, 44],
                [5, 12],
                [6, 74]
            ]
        };
        $.plot($("#flot-bar-chart"), [barData], barOptions);
        }
    })

    

});