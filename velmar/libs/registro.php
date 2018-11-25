<?php  
require 'Database.php';
require 'Insertar.php';


//comprobamos si esta seteado el boton
if(isset($_POST['boton']))
{
  
//comprobamos si esta seteado los datos de registro
  if(isset($_POST['nombre'])&&isset($_POST['usuario'])&&isset($_POST['password'])&&isset($_POST['email'])){
  $bd= Database::getInstancia();
//seleccionamos un usuario para saber si esta ya registrado
  $query= "SELECT * FROM usuario where usuario=:usuario";
   $sql = $bd->prepare($query);
        $sql->bindParam(':usuario', $_POST['usuario'], PDO::PARAM_STR);
        $sql->execute();
        //si es ==0 no esta registrado entonce slo registramos
        if ($sql->rowCount()==0){
          $db=new Insertar() ;
          $pintar=$sql->rowCount();
          print("$pintar");

            $db->nombre= htmlspecialchars($_POST['nombre']);
            $db->usuario= htmlspecialchars($_POST['usuario']);
            $db->password= md5(htmlspecialchars($_POST['password']));
            $db->email= htmlspecialchars($_POST['email']);
            
            $db->insert();
            
            header("location:http://localhost/velmar/login.php");
            //si esta registrado nos envia el registro de nuevo
        } else {
             $pintar=$sql->rowCount();
          print("$pintar");
                    
          header("location:http://localhost/velmar/registro.php");
        }
}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/estiloR.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>
	<div class="container" >
    <h2>Resgistro</h2>
    <input type="hidden" id="flag" name="flag" value="false" />
	<form class="form-inline" method="post" action='<?php echo $_SERVER['PHP_SELF']; ?>'>
  <div class="form-group " id ="correo">
    <label for="email">
    <i class="fas fa-envelope fa-2x"  ></i>
    </label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" required>
  </div>
  <div class="form-group" id="contrasena">
    <label for="pwd" >
    <i class="fas fa-lock fa-2x " ></i>
    </label>
    <input type="password" class="form-control" name="password" placeholder="Enter password" required>
  </div>
  <div class="form-group" id="usuario">
    <label for="user" >
    <i class="fas fa-user fa-2x "  "></i>
    </label>
    <input type="text" class="form-control" name="usuario" placeholder="Enter username" required>
  </div>
  <div class="form-group"  id="nombre">
    <label for="name" >
     <i class="fas fa-address-card fa-2x"></i>
    </label>
    <input type="text" class="form-control" name="nombre" placeholder="Enter your full name" required>
  </div>

  <button type="submit" class="btn btn-primary" id="boton" name="boton">Submit</button>
</form>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>