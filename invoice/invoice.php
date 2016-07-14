<?php 
require_once("../session.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DOL-Invoice Printing System</title>

<link rel="stylesheet" type="text/css" href="../css/container_style.css" />
<link rel="stylesheet" type="text/css" href="../css/invoice.css" />

<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="invoice_ajax.js" type="text/javascript"></script>






<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body> 				 
<div id="container"> 	<!--------------------- open container div -------------------------->

<?php 
require_once("../plug_in/non_user.php");
include ("../company.php");
 ?>

<div id="body">	<!--------------------- open body div -------------------------->
<div id="print">

<div id="fullinvoice">
<div id="topinvoice">

</div>
<?php 
$sql="SELECT * 
FROM  `customer` 
WHERE  `customer_id` =  '".$_GET['cuos_id']."'";

//echo $sql;
$result =mysql_query($sql);
$row=mysql_fetch_array($result);
?>
<table id="userictopinvoice">
<tr>
<td><?php echo $row['name'];?> </td>

</tr>
<tr>
<td><?php echo $row['address'];?> </td>
<td align="right"></td>
</tr>
<tr>
<td><?php echo $row['tel'];?> </td>
<td align="right"></td>
</tr>
</table>
<table id="userictopinvoice2">
<tr>

<td align="right"><?php echo $_GET['invoice_id'];?> </td>
</tr>
<tr>
<td align="right"><?php date_default_timezone_set('Asia/Colombo');	 echo date("l, F j, Y") ?> </td>

</tr>
<tr>


</tr>
</table>
<div id="inlisy">
<table id="tbinlisy">

<?php 
$sql="SELECT * 
FROM  `job` 
WHERE  `customer_id` =  '".$_GET['cuos_id']."'
AND  `invoice_no` =  '".$_GET['invoice_id']."'";

//echo $sql;
$result =mysql_query($sql);
include'../plug_in/sum_fords.php';	
$sum="";$total="";$count="";
while($row=mysql_fetch_array($result)){
$total=$row['quantity']*$row['unit cost'];
$sum+=$total;
$count+=1;
			echo"<tr>
    		<td width=\"95px\">".$count."</td>
    		<td width=\"190px\">".$row['description']."</td>
    		<td width=\"55px\">".$row['quantity']."</td>
			<td width=\"75px\">".$row['unit cost']."</td>
			<td>".$total."</td>
  			</tr>";	
		}
echo "</table>
<table id=\"inlisy2\"><tr><td width=\"330px\" align='center'>".convert_number_to_words($sum)." rupees only</td><td width=\"80px\"></td><td>".number_format($sum, 2)."</td></tr>";				
?>
</table>

</table>


</div>
</div>
</div>

    <!--------------------- close rec_add_new_item div ------------------>
<div align="center" id="resoult">
<input type="button" value="Print Invoice" onclick="javascript:printDiv('printablediv' , '<?php echo $_GET['invoice_id']." ', '".$_GET['coppy']; ?>')" />
</div>
</div>      <!---- close body div ---->

<?php include("../utility/footer_main.php"); ?>

</div>	<!--------------------- close container div -------------------------->


</body>
</html>