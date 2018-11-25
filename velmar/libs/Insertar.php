<?php  
	// Desarrollo web en entorno Servidor
	// Manuel Zambrana Jimenez
	// Curso 2018/19

Class Insertar{
	public $mensaje;
	public $nombre;
	public $usuario;
	public $password;
	public $email;

	public function insert()
	{	

		//creamos una conexion a nuestra bbdd

		require_once 'Database.php';
	    $db = Database::getInstancia() ;


	    //insertamos nuestros datos de registro a ls bbdd
		$sql = "INSERT INTO usuario (usuario, password, nombre, email) VALUES (:usuario, :password, :nombre, :email)" ;

		$consulta=$db->prepare($sql);
		$consulta->bindParam(':usuario',$this->usuario);
		$consulta->bindParam(':password',$this->password);
		$consulta->bindParam(':nombre',$this->nombre);
		$consulta->bindParam(':email',$this->email);
		//comprobamos si hay error en la consulta
		if(!$consulta){
			echo "error";
		}else{
			$consulta->execute();
			echo "gg ez";
		}
	}


	



	}









?>