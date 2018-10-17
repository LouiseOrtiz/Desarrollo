<?php 

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";


class TablaProductosVentas{
	/*===============================================
	=            MOSTRAR TABLA PRODUCTOS            =
	===============================================*/
	
	public function mostrarTablaProductosVentas(){

		$item = null;
		$valor = null;

		$productos = ControladorProductos::ctrMostrarProductos($item, $valor);

		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($productos); $i++){

		  	/*===========================================
		  	=            MOSTRAMOS LA IMAGEN            =
		  	===========================================*/
		  	
		  	$imagen = "<img src='".$productos[$i]["imagen"]."' width='40px'>";
		  	
		  	/*=====  End of MOSTRAMOS LA IMAGEN  ======*/
		  	
		  	/*=============================
		  	=            STOCK            =
		  	=============================*/
		  	
		  	if($productos[$i]["stock"] <= 4){

  				$stock = "<button class='btn btn-danger'>".$productos[$i]["stock"]."</button>";

  			}else if($productos[$i]["stock"] > 4 && $productos[$i]["stock"] <= 7){

  				$stock = "<button class='btn btn-warning'>".$productos[$i]["stock"]."</button>";

  			}else{

  				$stock = "<button class='btn btn-success'>".$productos[$i]["stock"]."</button>";

  			}

		  	
		  	/*=====  End of STOCK  ======*/
		  	
		  	/*==============================================
		  	=            MOSTRAMOS LAS ACCIONES            =
		  	==============================================*/
		  	
		  	$botones =  "<div class='btn-group'><button class='btn btn-primary agregarProducto recuperarBoton' idProducto='".$productos[$i]["id"]."'>Agregar</button></div>"; 

		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$imagen.'",
			      "'.$productos[$i]["codigo"].'",
			      "'.$productos[$i]["descripcion"].'",
			      "'.$stock.'",
			      "'.$botones.'"
			    ],';

		  }

		  $datosJson = substr($datosJson, 0, -1);

		 $datosJson .=   '] 

		 }';
		
		echo $datosJson;

		  	
		  	/*=====  End of MOSTRAMOS LAS ACCIONES  ======*/
		  	 

	}
	
	/*=====  End of MOSTRAR TABLA PRODUCTOS  ======*/
	
	

}

/*===============================================
=            ACTIVAR TABLA PRODUCTOS            =
===============================================*/

$activarProductosVentas = new TablaProductosVentas();
$activarProductosVentas -> mostrarTablaProductosVentas();

/*=====  End of ACTIVAR TABLA PRODUCTOS  ======*/


?>