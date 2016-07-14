<?php 
if($_SESSION['level']=="Admin"){
	include("../utility/admin_header_main.php");
}
else if($_SESSION['level']=="User"){
	include("../utility/header_main.php");
}
else{
	header('Location: ../account');
}

 ?>