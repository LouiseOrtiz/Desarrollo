/*--==================================
=            Sidebar Menu            =
===================================--*/

$('.sidebar-menu').tree();

/*--====  End of Sidebar Menu  ====--*/

/*--==================================
=            DATA TABLE              =
===================================--*/

$('.tablas').DataTable({

	"language": {

		"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
		"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar:",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Último",
		"sNext":     "Siguiente",
		"sPrevious": "Anterior"
		},
		"oAria": {
			"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			"sSortDescending": ": Activar para ordenar la columna de manera descendente"
		}

	}
});

/*--====  End of DATA TABLE  ====--*/

/*=============================================
 //iCheck for checkbox and radio inputs
=============================================*/

$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
  checkboxClass: 'icheckbox_minimal-blue',
  radioClass   : 'iradio_minimal-blue'
})

/*===================================================
=            VALIDAR LA ENTRADA DE DATOS            =
===================================================*/

function soloNumeros(e){
	key=e.keyCode || e.which;
	teclado=String.fromCharCode(key);
	numeros="0123456789";
	especiales='8 - 46';
	teclado_especial=false;
	for(var i in especiales){
		if(key == especiales[i]){
			teclado_especial = true;
		}
	}
	if(numeros.indexOf(teclado)==-1 && !teclado_especial){
		return false;
	}
}

function telefono(e){
	key=e.keyCode || e.which;
	teclado=String.fromCharCode(key);
	numeros="0123456789";
	especiales='8 - 46';
	teclado_especial=false;
	for(var i in especiales){
		if(key == especiales[i]){
			teclado_especial = true;
		}
	}
	if(numeros.indexOf(teclado)==-1 && !teclado_especial){
		return false;
	}
}




    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }


/*=====  End of VALIDAR LA ENTRADA DE DATOS  ======*/


/*=======================================================
=            LIMPIAR CAMPOS VENTANAS MODALES            =
=======================================================*/



/*=====  End of LIMPIAR CAMPOS VENTANAS MODALES  ======*/
