<?php 

//----------------------------------------------------------------------------------------------------------------
	if($_GET['log']=="todbjs")
{	
include'../conn.php';

$sql="SELECT *
FROM customer
WHERE (	customer_id	 LIKE '%".$_GET['search']."%' 
or name LIKE '%".$_GET['search']."%' )";

//echo $sql;
$result =mysql_query($sql);																																																																																																					
	$i=1;
	
	if (mysql_num_rows($result)>0){
		
		echo "<p> ".mysql_num_rows($result)." Customers Found.</p>
		<table id='report_table'>
  		<tr>
			<th></th>
    		<th>Customer id</th>
    		<th>Name of Customer</th>	
    		<th>E mail</th>
            <th>Address</th>
			<th></th>
  		</tr>";
		while($row=mysql_fetch_array($result)){

			echo"<tr>
			<td>".$i."</td>
    		<td>".$row['customer_id']."</td>
    		<td>".$row['name']."</td>
    		<td>".$row['email']."</td>
			<td>".$row['address']."</td>
			<td>
			<a href='add_invoice.php?coustomer=".$row['customer_id']."'>Add Invoice</a>
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
