<?php
//Archivo de conexión a la base de datos
require_once('Database.php');
$db= Database::getInstancia();
	CONST MAX_REGISTROS=4;
$data = "";

//Variable de búsqueda
$consultaBusqueda = $_POST['valorBusqueda'];



//Variable vacía (para evitar los E_NOTICE)
$mensaje = "";


//Comprueba si $consultaBusqueda está seteado
if (isset($consultaBusqueda)&&( strlen ($consultaBusqueda)>1)) {	
	$consulta = "SELECT * FROM productos
	WHERE nomPro  LIKE '%$consultaBusqueda%' ";
	 $sqlp = $db->prepare($consulta);
	 $sqlp->execute();

	
	
	$resultados=$sqlp->fetchObject ();
	
	//Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
	if ($sqlp->rowCount()===0) {
		echo "no hay resultados";
		
	} else {
		//Si existe alguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
	
		if (is_array($resultados) || is_object($resultados)){
		

			
			$mensaje .= '
			<div id="main" style="padding:20px;">

			<div id="content" class="row" style="margin-top:20px;" data-page="1">


				<div class="col-md-6">
					<p>					
					<h3 name="idProducto">'.$resultados->nomPro.'</h3>
					</p>
					<img src="'.$resultados->imagen.'"/>						
					</div>
				<div class="col-sm-12 col-md-6">
					<p style="text-align:justify;"class="descripcion">					
					'.$resultados->Descripcion.'						
					</p>
					<form action="comentario.php" name="confirmationForm" method="post">
   				    <textarea id="confirmationText" class="text" cols="60" rows ="4" name="confirmationText"></textarea>
   					<input type="submit" value="Enviar" class="submitButton">
   					<input type="number" id="idProducto" value="'.$resultados->idProducto.'" hidden="hidden" name="idProducto">
					</form>

					</div>
				</div>';
		
	}
	

	}; 
}else{

//si no hay datos  en la busqueda mostramos los 4 primeros comics
	
	$query="SELECT * FROM productos LIMIT 4; ";
	$sqlp=$db->prepare($query);
	$sqlp->execute();
	if($sqlp){


		$data = "";
		$productos=$sqlp->fetchAll(PDO::FETCH_ASSOC);
		foreach ($productos as $item ) {
			$idProducto=($item['idProducto']);
					$nomPro=($item['nomPro']);
					$Descripcion=($item['Descripcion']);
					$imagen=($item['imagen']);
			
		 	
		 
			
//div que queremos mostrar que guardaremos en data
			$data.='
			<div id="main" >

			<div id="content" class="row" style="margin-top:20px;" data-page="1">


				<div class="col-md-6">
					<p>					
					<h3 name="idProducto">'.$nomPro.'</h3>
					</p>
					<img src="'.$imagen.'"/>						
					</div>
				<div class="col-sm-12 col-md-6">
					<p style="text-align:justify;" class="descripcion">					
					'.$Descripcion.'						
					</p>
					<form action="comentario.php" name="confirmationForm" method="post">
   				    <textarea id="confirmationText" class="text" cols="60" rows ="4" name="confirmationText"></textarea>
   					<input type="submit" value="Enviar" class="submitButton">
   					<input type="number" id="idProducto" value="'.$idProducto.'" hidden="hidden" name="idProducto">
					</form>
					
					</div>
				</div>';

	


}
}
}

//Devolvemos el mensaje que tomará jQuery
echo $mensaje;
echo $data;
?>