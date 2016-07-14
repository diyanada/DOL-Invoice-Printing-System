<?php 

//----------------------------------------------------------------------------------------------------------------
	if($_GET['log']=="todbjs")
{	
include'../conn.php';

$sql="SELECT *
FROM customer, invoice
WHERE invoice.customer_id=customer.customer_id	and (	customer.customer_id	 LIKE '%".$_GET['search']."%' 
or customer.name LIKE '%".$_GET['search']."%' or invoice.invoice_id LIKE '%".$_GET['search']."%' ) and invoice.status='add' ORDER BY  `invoice`.`date` DESC ";

//echo $sql;
$result =mysql_query($sql);																																																																																																					
	$i=1;
	
	if (mysql_num_rows($result)>0){
		
		echo "<p> ".mysql_num_rows($result)." Invoice Found.</p>
		<table id='report_table'>
  		<tr>
			<th></th>
    		<th>Invoice id</th>			
    		<th>Customer id</th>
    		<th>Name of Customer</th>	
			<th></th>
  		</tr>";
		while($row=mysql_fetch_array($result)){

			echo"<tr>
			<td>".$i."</td>
			<td>".$row['invoice_id']."</td>
    		<td>".$row['customer_id']."</td>
    		<td>".$row['name']."</td>
			<td>
			<a href='invoice.php?invoice_id=".$row['invoice_id']."&coppy=no&cuos_id=".$row['customer_id']."'>Preview Invoice</a>
			</td>
  			</tr>";
			$i=$i+1;
		}
		echo "</table>";
	}else{
		echo "No Customer.";
	}
}

?>
