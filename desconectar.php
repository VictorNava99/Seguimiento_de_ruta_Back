<?php 
session_start();
if($_SESSION['user']){	
	session_destroy();
	header("location:inicio.php");
}
else{
	header("location:inicio.php");
}
?>