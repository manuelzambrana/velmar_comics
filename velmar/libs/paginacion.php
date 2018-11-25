<?php  
	require_once "Database.php";
	CONST MAX_REGISTROS=4;

	$db= Database::getInstancia();
	

//obtenemos la pagina en la que estamos
	if (!isset($_GET["p"])) die("Error") ;


	$pag = $_GET["p"];

	$resultado = ["error"=> false, "html"=>""];


	$principio = ($pag-1)*MAX_REGISTROS;
//hacemos un cnsulta que nos limite a 4 los comics que nos muestra en cada pagina
	$query="SELECT * FROM productos LIMIT $principio, ".MAX_REGISTROS."; ";
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
					

		 	
		 
			
//data que mostraremos en el html
			$data.=

<<<EX
				<div class="col-md-6">
					<p>					
					<h3>$nomPro</h3>
					</p>
					<img src="$imagen"/>						
					</div>
				<div class="col-sm-12 col-md-6">
					<p style="text-align:justify;"class="descripcion">					
					$Descripcion</br>	
									
					</p>
					<form action="comentario.php" name="confirmationForm" method="post">
   				    <textarea id="confirmationText" class="text" cols="60" rows ="4" name="confirmationText"></textarea>
   					<input type="submit" value="Enviar" class="submitButton">
   					<input type="number" id="idProducto" value="$idProducto" hidden="hidden" name="idProducto">
					</form>



					</div>
EX;


			
		}

		$resultado["html"] = $data ;


	}else{
		$resultado["error"]=true;
	}
	//enviamos el resultado

	header("content-Type: application/json");
	

	echo json_encode($resultado) ;


    // 

















?>