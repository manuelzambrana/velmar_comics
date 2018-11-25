<?php
//Archivo para borrar los usuarios que sellecionemos (Solo el admin puede)
    require 'Database.php';
    $db= Database::getInstancia();

    $id = 0;
     
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
      
        $sql = "DELETE FROM usuario  WHERE idUsuario = :id";
        $sqlp = $db->prepare($sql);
        $sqlp->bindParam (":id", $id, PDO::PARAM_INT);
        $sqlp->execute();
        //redireccion a administracion php
        header("location:http://localhost/velmar/libs/administracion.php");

       
        
    }
   
?>
