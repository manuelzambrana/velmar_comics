<?php 
//cerrar sesion

session_start();
session_unset();
session_destroy();

header("location:http://localhost/velmar/login.php");



 ?>