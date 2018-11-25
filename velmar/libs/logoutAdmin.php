<?php 
//cerrar sesion admin
session_start();
session_unset();
session_destroy();

header("location:http://localhost/velmar/libs/loginAdmin.php");



 ?>