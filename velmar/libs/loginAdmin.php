<?php 
  
  
    session_start();

  //comprobamos que este seteado user y pwd
    
    if (isset($_POST["user"])&& isset($_POST["pwd"])) :
      require_once "Database.php";

      $db= Database::getInstancia();
      $user=$_POST["user"];
      $pwd=$_POST["pwd"];
      //consulra para ver si esta el usuarioAdmin registrado
      $sqlp = $db->prepare("SELECT * FROM administrador 
                 WHERE usAdmin=:user AND pwdAdmin=MD5(:pwd) ;") ;
    $sqlp->bindParam(":user",$user,PDO::PARAM_STR,10) ;
    $sqlp->bindParam(":pwd",$pwd,PDO::PARAM_STR,32) ;
      if ($sqlp->execute()):
      if ($sqlp->rowCount() > 0):
        //si esta registrado le enviamo a administracion.php
        
          header("location:administracion.php");
          $sesion=session_start();
          $_SESSION['usAdmin']=$user;
          $_SESSION['time']=time();
          $_SESSION['session']=serialize($sesion);

        else:
          //si no a admin php
       echo "usuario o contraseña incorrectos";

      endif ;
    else:
      echo "Se ha producido un error de conexión con la base de datos. Contacte con el administrador." ;
    endif ;
      
    

  endif ;

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/estiloL.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>
	<div class="container" >
		<h1>LOGIN ADMIN</h1>
	<form class="form-inline"  method="post">
  <div class="form-group" id="contrasena">
    <label for="pwd" >
    <i class="fas fa-lock fa-2x " ></i>
    </label>
    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" required>
  </div>
  <div class="form-group" id="usuario">
    <label for="user" >
    <i class="fas fa-user fa-2x "  "></i>
    </label>
    <input type="text" class="form-control" id="user" name="user" placeholder="Enter username" required>
  </div>
  <div class="form-group"  id="nombre">
  

  <button type="submit" class="btn btn-primary" id="boton">Submit</button>
</form>
</div>

                        	





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>



