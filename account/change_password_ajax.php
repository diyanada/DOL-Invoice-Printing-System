<?php

//-------------------------------------------------------------------------------------------------------------------------------------------------	
	if($_GET['log']=="passstrjax")
{
	
	$pwd=$_GET["q"];
	
if (preg_match("#.*^(?=.{6,20})(?=.*[a-z])(?=.*[0-9])(?=.*\W).*$#", $pwd)){
	echo"<strong style='color:#009900'>Your password is strong.</strong>";
} else {
	echo"<strong style='color:#900'>Your password is not safe.</strong>";
}
}
//-------------------------------------------------------------------------------------------------------------------------------------------------	
	if($_GET['log']=="conpastrjax")
{


	
if($_GET["user_cpstp"]==$_GET["user_pastp"]) {
	echo"<strong style='color:#009900'>Your Passwords Match.</strong>";
} else {
	echo"<strong style='color:#900'>Your Passwords NOT Match.</strong>";
}
}
//-------------------------------------------------------------------------------------------------------------------------------------------------	
	if($_GET['log']=="todbjs")
{
require_once("../session.php"); 
include'../conn.php';

if($_GET["user_opw"]!=$_SESSION['Password']){	
	echo"<strong style='color:#900'>Your Old Passwords is Wrong.</strong>";
}

else if($_GET["user_pas"]!=$_GET["user_cps"]){	
	echo"<strong style='color:#900'>Your Passwords NOT Match.</strong>";
}
else{

$sql="INSERT INTO oldpasswords (userid , oldpass , date) VALUES ('".$_SESSION['Userid']."', '".$_GET["user_opw"]."', '".date("Y-m-d H:i:s")."')";
//echo $sql;
$query =mysql_query($sql);																																																																																																					
	
	
	if($query==false)
{
	 
	 echo"<strong style='color:#900'>Couldn't insert to the databse</strong>";
	
	}
	else
	{
		$sql="UPDATE user SET password = '".$_GET["user_pas"]."' WHERE user.userid = '".$_SESSION['Userid']."'";

//echo $sql;
$query =mysql_query($sql);																																																																																																					
	
	
	if($query==false)
{
	 
	 echo"<strong style='color:#900'>Couldn't insert to the databse</strong>";
	
	}
	else
	{
		echo"<strong style='color:#009900'>Successfully Changed</strong>";
		
		}
		
		} 




}
}
?>