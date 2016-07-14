<?php 
//include'../company.php';
	if($_GET['log']=="time")
{
date_default_timezone_set('Asia/Colombo');	
	
if($_GET['str']=="Very Urgent"){
$time = date("Y-m-d\TH:i", mktime(date("H")+00, date("i")+00, 0, date("m"), date("d")+00, date("Y")));
echo "<input type='datetime-local' id='time' name='time' value=".$time." disabled='disabled' />";
}
if($_GET['str']=="Urgent"){
$time = date("Y-m-d\TH:i", mktime(date("H")+00, date("i")+00, 0, date("m"), date("d")+00, date("Y")));
echo "<input type='datetime-local' id='time' name='time' value=".$time." disabled='disabled' />";
}
if($_GET['str']=="Soon as Possible"){
$time = date("Y-m-d\TH:i", mktime(date("H")+00, date("i")+00, 0, date("m"), date("d")+00, date("Y")));
echo "<input type='datetime-local' id='time' name='time' value=".$time." disabled='disabled' />";
}
if($_GET['str']=="Customer Request"){
$time = date("Y-m-d\TH:i");
echo "<input type='datetime-local' id='time' name='time' value=".$time." />";
}




}
//-----------------------------------------------------------------
	if($_GET['log']=="timewkk")
{
date_default_timezone_set('Asia/Colombo');	

include'../conn.php';
require_once("../session.php"); 
include'../company.php';

$invoice_id="KPMS/".date("ymd")."/".substr($_GET['cuos_id'], 5)."/".date("Gi");

$newtime = date('Y-m-d H:i:s', strtotime($_GET['time']));



$sql="INSERT INTO invoice (`invoice_id`, `customer_id`, `temp_job`, `remarks`, `time`, `urgent`, status, `user`, `date`) 
VALUES ('".$invoice_id."', '".$_GET['cuos_id']."', '".$_GET['rand']."', '".$_GET['Remarks_in']."', '".$newtime."', '".$_GET['urgent']."', 'add', '".$_SESSION['User']."', '".date("Y-m-d H:i:s")."')";

//echo $sql;

$query =mysql_query($sql);																																																																																																					
	
	
	if($query==false)
{
	 
	 echo"<strong style='color:#900'>Couldn't insert to the databse</strong>";
	
	}
	else
	{
		
$sql="SELECT * 
FROM  `temp_job` 
WHERE  `customer_id` =  '".$_GET['cuos_id']."'
AND  `invoice_no` =  '".$_GET['rand']."'";

//echo $sql;
$result =mysql_query($sql);																																																																																																					

$job_id="";	
while($row=mysql_fetch_array($result)){
$job_id=$invoice_id."/".$row['job_no'];	
	$sql="INSERT INTO `invoice`.`job` (`customer_id`, `invoice_no`, `job_no`, `file`, `file_path`, `description`, `type`, `material`, `quantity`, `unit cost`, `status`, `user`, `date`) 
	VALUES (
	'".$row['customer_id']."', 
	'".$invoice_id."', 
	'".$job_id."', 
	'".$row['file']."', 
	'".$row['file_path']."', 
	'".$row['description']."', 
	'".$row['type']."', 
	'".$row['material']."', 
	'".$row['quantity']."', 
	'".$row['unit cost']."', 
	'".$row['status']."', 
	'".$_SESSION['User']."', '".date("Y-m-d H:i:s")."')";

$query =mysql_query($sql);	
	}
		
	if($result==false)
{
	 
	 echo"<strong style='color:#900'>Couldn't insert to the databse</strong>";
	
	}
	else
	{
	 echo"<strong style='color:#009900'>Successfully Added Invoice! <br> Invoice Number : ".$invoice_id."</strong>
	 <br><a href='../invoice/invoice.php?invoice_id=".$invoice_id."&coppy=yes&cuos_id=".$_GET['cuos_id']."'>Preview Invoice";	
	}
		}

}
?>
