<?php  
//iniciamos session
$sesion=session_start();
if (!isset($_SESSION["usuario"])){
	header("location:../index.php");

}






?>



<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!-- scrip para pasar de pagina e ir obteniendo comics -->
	<script id="cont">
		$(document).ready(function() {
			function getComics() {
				//obtener la pagina en la que nos situamos
				var pag = $("#content").data("page") + 1;
				
				if(pag>4){
					pag=4;
				}				

				$("#content").data("page", pag) ;

				$.ajax({
				    method  : "GET",
					url     : "paginacion.php",
					dataType: "json",
					data    : { "p" : pag },
					success : function(data) {	
							if (!data.error&&pag<5) $("#content").html(data.html);	
									
					}

				});
			}

			$("#more").click(function() {getComics() ; });
			getComics();

		});
		// 	<!-- scrip para pasar a la pagina anterior e ir obteniendo comics  -->

		$(document).ready(function() {
			function getComics2() {
				//obtener la pagina en la que nos situamos
				var pag = $("#content").data("page")-1;
					
				if(pag<1){
					pag=1;
				}			

				$("#content").data("page", pag) ;

				$.ajax({
				    method  : "GET",
					url     : "paginacion.php",
					dataType: "json",
					data    : { "p" : pag },
					success : function(data) {	
							
							if (!data.error) $("#content").html(data.html);	
										
					}

				});
			}

			$("#menos").click(function() {getComics2() ; });
			getComics2();

		});
		


	</script>

<script>
	//script para poder buscar comics a traves de AJAX
$(document).ready(function() {

    $("#resultadoBusqueda").append('<p>JQUERY VACIO</p>');
});

function buscar() {
    var textoBusqueda = $("input#busqueda").val();
 
     if (textoBusqueda.length>=1) {
     	//resultado de la busqueda
        $.post("buscar.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            $("#content").html(mensaje);
         }); 
     }
};
</script>

	

	<style type="text/css">

		

	</style>
</head>
<body>
	<div class="container-fluid">

	<header class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<form method="POST">
		<div class="container" style="height: 90px;">
			<img src="../images/logo.png" id="logo" style="position: relative; right: 210px;" />
		
<input type="text" name="busqueda" id="busqueda" value="" placeholder="" maxlength="30" autocomplete="off" onKeyUp="buscar();" />			
</form>
	<?php 
			if($_SESSION){
			echo "<h4 style=\"color: white; position: absolute; left: 700px; bottom: 20px;\">"."Bienvenid@ ".$_SESSION['usuario']."</h4>";
		}


			 ?>

			<!-- <a class="btn btn-primary" href="login.php" role="button" id="login">login</a>
			<a class="btn btn-primary" href="registro.php" role="button" id="registro">registro</a> -->
			<form method="post" action="logout.php">
			<a class="btn btn-primary logout" href="logout.php" role="button">logout</a>
			</form>
		
		</div>
	</header>

	<div id="main" style="padding:20px;">


		
				
			
			<!-- contenido -->
			<div id="content" class="row" style="margin-top:20px;" data-page="1">
					<!-- Barra de búsqueda -->
		<div id="resultadoBusqueda">
			<!-- aqui mostramos los resultados de busqueda -->
				
				
			</div>
		
		
				
			</div> 

			<a id="more" href="#">cargar más</a>
			<a id="menos" href="#" style="    position: relative;
    left: 100px;">cargar menos</a>


		</div>
	</div>
	</form>




</html>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
