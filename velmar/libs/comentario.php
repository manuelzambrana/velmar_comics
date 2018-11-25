<?php

    $sesion=session_start();
    require 'Database.php';
    $db= Database::getInstancia();

    $id = 0;
   
     //si esta seteado enviaremos nuestro comentario al foro
    if (isset($_POST['confirmationText'])) {
      // POST de variables
    	$idProducto= $_POST['idProducto'];
        
        $confirmationText= $_POST['confirmationText'];
        $nombre=$_SESSION['usuario'];


      
        //insertamos nuestros comentarios
          $sql= "INSERT INTO comentario (Comentario, idProducto, nombre) VALUES (:confirmationText, :idProducto, :nombre  ) " ;


          $sqlp=$db->prepare($sql);  
         $sqlp->bindParam(':confirmationText', $confirmationText, PDO::PARAM_STR);
         $sqlp->bindParam(':idProducto', $idProducto, PDO::PARAM_STR);

         $sqlp->bindParam(':nombre', $nombre, PDO::PARAM_STR);

          $sqlp->execute();
          //recogemos nuestros comentarios para mostrarlos
          $query="SELECT * from comentario C inner join productos P ON P.idProducto=C.idProducto where C.idProducto = $idProducto" ;
	      $s=$db->prepare($query);
	      $s->execute();
		  $productos=$s->fetchAll(PDO::FETCH_ASSOC);
          


          

          	
          	
          




     
       
        
    
   
?>


<!DOCTYPE html>
<html>
<head>
	<title>Foro</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<style type="text/css">
		td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
	</style>
</head>
<body>
	<table class="table table-striped table-hover">
		  <tr>
    <th>nombre Producto</th>
    <th>nombre usuario</th> 
    <th>Comentario</th>
  </tr>
  <!-- for each para mostrar los productos comentados -->
<?php  foreach ($productos as $key ) { ?>
                    <tr>

                        <td><?php echo ($key['nomPro']); ?></td>
                        <td><?php echo ($key['nombre']); ?></td>
                        <td><?php echo ($key['Comentario']); ?></td>
                       
                        
                    <?php }} 
                    ?>

                    </tr>
	</table>

</body>
</html>
