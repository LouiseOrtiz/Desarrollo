<?php 

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

class TablaProductos{
	/*=============================================== 
	=            MOSTRAR TABLA PRODUCTOS            =
	===============================================*/
	
	public function mostrarTablaProductos(){

		$item = null;
		$valor = null;

		$productos = ControladorProductos::ctrMostrarProductos($item, $valor);
		//var_dump($productos);

		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($productos); $i++){

		  	/*===========================================
		  	=            MOSTRAMOS LA IMAGEN            =
		  	===========================================*/
		  	
		  	$imagen = "<img src='".$productos[$i]["imagen"]."' width='40px'>";
		  	
		  	/*=====  End of MOSTRAMOS LA IMAGEN  ======*/

		  	/*============================================
		  	=            TREAMOS LA CATEGORIA            =
		  	============================================*/
		  	
		  	$item = "id";
		  	$valor = $productos[$i]["id_categoria"];

		  	$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
		  	
		  	
		  	/*=====  End of TREAMOS LA CATEGORIA  ======*/
		  	
		  	/*=============================
		  	=            STOCK            =
		  	=============================*/
		  	
		  	if($productos[$i]["stock"] <= 10){

  				$stock = "<button class='btn btn-danger'>".$productos[$i]["stock"]."</button>";

  			}else if($productos[$i]["stock"] > 11 && $productos[$i]["stock"] <= 15){

  				$stock = "<button class='btn btn-warning'>".$productos[$i]["stock"]."</button>";

  			}else{

  				$stock = "<button class='btn btn-success'>".$productos[$i]["stock"]."</button>";

  			}

		  	
		  	/*=====  End of STOCK  ======*/
		  	
		  	/*==============================================
		  	=            MOSTRAMOS LAS ACCIONES            =
		  	==============================================*/
		  	
		  	$botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$productos[$i]["id"]."' data-toggle='modal' data-target='#modalEditarProducto'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarProducto' idProducto='".$productos[$i]["id"]."' codigo='".$productos[$i]["codigo"]."' imagen='".$productos[$i]["imagen"]."'><i class='fa fa-times'></i></button></div>"; 

		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$imagen.'",
			      "'.$productos[$i]["codigo"].'",
			      "'.$productos[$i]["codigoSAT"].'",
			      "'.$productos[$i]["descripcion"].'",
			      "'.$productos[$i]["unidad"].'",
			      "'.$productos[$i]["unidad_sat"].'",
			      "'.$productos[$i]["marca"].'",			      
			      "'.$categorias["categoria"].'",
			      "'.$stock.'",
			      "'.$productos[$i]["precio_compra"].'",			      
			      "'.$productos[$i]["precio_venta"].'",
			      "'.$productos[$i]["fecha"].'",
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

$activarProductos = new TablaProductos();
$activarProductos -> mostrarTablaProductos();

/*=====  End of ACTIVAR TABLA PRODUCTOS  ======*/


?>