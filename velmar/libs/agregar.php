<?php  
require_once "Producto.php";

$p= new Producto();
$p->nomPro=$_POST["nomPro"];

echo $p->nomPro;

















?>