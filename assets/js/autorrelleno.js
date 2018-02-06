function buscar_recibo(Value){
	console.log(Value.value);
	var param = {
		"recibo": Value.value
	};

	$.ajax({
		type: "post",
		url: base_url + "Recaudador/buscar_boleta",
		data: param,
		dataType: "json",

		success: function(respuesta){
		//	$data = jQuery.parseJSON(respuesta);
			document.getElementById("talonario").value = respuesta.talonario;
			document.getElementById("socio_nombre").value = respuesta.nombre;
			document.getElementById("F_pago").value = respuesta.fecha;
			document.getElementById("monto").value = respuesta.monto;
			document.getElementById("direccion").value =  respuesta.direccion;
			document.getElementById("sector").value = respuesta.sector;
		}
	});
}