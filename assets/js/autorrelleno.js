function buscar_recibo(Value){
	//console.log(Value.value);
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


function buscar_IDsocio(Value){
	var param = {
		"socio_id": Value.value		
	};

	$.ajax({
		type: "post",
		url: base_url + "Recaudador/buscar_idsocio",
		data: param,
		dataType: "json",

		success: function(respuesta){
			//console.log(respuesta);
			document.getElementById('N_Socio').value = respuesta.nombre;
			document.getElementById('Direccion').value = respuesta.direccion;
			document.getElementById('sector').value = respuesta.sector;

		}

	});
}


function buscar_Nombresocio(Value2){
var param = {
		"N_Socio": Value2.value		
	};

	$.ajax({
		type: "post",
		url: base_url + "Recaudador/buscar_nombresocio",
		data: param,
		dataType: "json",

		success: function(respuesta){

		//	console.log(respuesta);
			document.getElementById('socio_id').value = respuesta.id;
			document.getElementById('Direccion').value = respuesta.direccion;
			document.getElementById('sector').value = respuesta.sector;

		}

	});
}


function buscar_Dirsocio(Value3){
	var param = {
		"Direccion": Value3.value
	};

	$.ajax({
		type: "post",
		url: base_url + "Recaudador/buscar_dirsocio",
		data: param,
		dataType: "json",

		success: function(respuesta){
			document.getElementById('socio_id').value = respuesta.id;
			document.getElementById('N_Socio').value = respuesta.nombre;
			document.getElementById('sector').value = respuesta.sector;

		}
	});
}