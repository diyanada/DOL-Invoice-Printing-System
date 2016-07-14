<?php
//-------------------------------------------------------------------------------------------------------------------------------------------------	

//-------------------------------------------------------------------------------------------------------------------------------------------------	
	if($_GET['log']=="todbjs")
{

	include'../conn.php';
	require_once("../session.php");

$userid=date("YmdHis");  
$userid="IMS".$userid;


$sql="INSERT INTO customer (`customer_id`, `name`, `email`, `address`, `city`, `country`, `tel`, `mobile` ,`date`, user) VALUES ('".$userid."', '".$_GET["name_first"]."', '".$_GET["user_mail"]."', '".$_GET["user_ad1"]."', '".$_GET["user_cty"]."', '".$_GET["user_cun"]."', '".$_GET["user_tel"]."', '".$_GET["user_mob"]."', '".date("Y-m-d H:i:s")."', '".$_SESSION['Userid']."')";

//echo $sql;
$query =mysql_query($sql);																																																																																																					
	
	
	if($query==false)
{
	 
	 echo"<strong style='color:#900'>Couldn't insert to the databse</strong>";
	
	}
	else
	{
	
		echo"<strong style='color:#009900'>Successfully added</strong>";
		
		}
}
?>