<?php 

//----------------------------------------------------------------------------------------------------------------
	if($_GET['log']=="todbjs")
{	
include'../conn.php';

$sql="UPDATE  invoice SET  status =  'print' WHERE  invoice_id =  '".$_GET['invoice_id']."'";

//echo $sql;
$result =mysql_query($sql);																																																																																																					

		echo "This invoice is already printed.<br><a href='get_invoice.php'>Next Invoice</a>";
}

?>
