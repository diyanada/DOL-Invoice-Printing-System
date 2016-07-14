<?php 

//----------------------------------------------------------------------------------------------------------------
	if($_GET['log']=="todbjs")
{	
include'../conn.php';
require_once("../session.php"); 
include'../company.php';



$sql="SELECT *
FROM customer
WHERE 	customer_id	= '".$_GET['search']."' ";

//echo $sql;
$result =mysql_query($sql);																																																																																																					
	$i=1;
	
	if (mysql_num_rows($result)>0){
		
		echo "
		<table id='report_table'>
  		<tr>
			
    		<th>Customer id</th>
    		<th>Name of Customer</th>	
    		<th>E mail</th>
            <th>Address</th>
			<th></th>
  		</tr>";
$row=mysql_fetch_array($result);

			echo"<tr>
			
    		<td>".$row['customer_id']."</td>
    		<td>".$row['name']."</td>
    		<td>".$row['email']."</td>
			<td>".$row['address']."</td>
			<td>
			<input type='text' name='cuos_id' id='cuos_id'  value='".$row['customer_id']."'  />
			<input type='text' name='rand' id='rand'  value='".$_GET['rand']."'  />
			<input type='text' name='num' id='num'  value='0'  />
			</td>
  			</tr>";

		echo "</table>";
		
		$temp_char=chr(92);
		$temp_arr=explode($temp_char, $_GET['file']);
		$f_name=end($temp_arr);
		

$sql="SELECT *
FROM `temp_job`
WHERE (
customer_id = '".$_GET['search']."'
AND invoice_no = '".$_GET['rand']."'
)";

//echo $sql;
$result_end =mysql_query($sql);

$xyo=mysql_num_rows($result_end);
		
$arrrrrt=$xyo+1;
$filepath=$DF_data_web."jobs/".date("Y")."/".date("F")."/".$_GET["rand"]."/".$f_name;
		
$sql="INSERT INTO temp_job 
(`customer_id`, `invoice_no`, `job_no`, `file`,  file_path, `description`, `type`, `material`, `quantity`, `unit cost`, `status`, `user`, `date`) VALUES ('".$_GET['search']."', '".$_GET['rand']."', '".$arrrrrt."', '".$f_name."', '".$filepath."', '".$_GET['description']."', '".$_GET['type']."', '".$_GET['material']."', '".$_GET['quantity']."', '".$_GET['unit']."', '', '".$_SESSION['User']."', '".date("Y-m-d H:i:s")."')";

//echo "<br>".$sql;
$result ==mysql_query($sql);			
		
	if($result==false)
{
	 
	 echo"<strong style='color:#900'>Couldn't insert to the databse</strong>";
	
	}
	else
	{
		echo "<br>
		<table id='report_table'>
  		<tr>
			<th></th>
    		<th>File Name</th>
    		<th>Description</th>	
    		<th>Type</th>
            <th>Material</th>
			<th>Quantity</th>
            <th>Unit Cost</th>
			<th>Total</th>
  		</tr>
		  		<tr>";
$sum="";$total="";
		while($row=mysql_fetch_array($result_end)){
$total=$row['quantity']*$row['unit cost'];
$sum+=$total;
			echo"<tr>
    		<td>".$row['job_no']."</td>
    		<td>".$row['file']."</td>
    		<td>".$row['description']."</td>
    		<td>".$row['type']."</td>
    		<td>".$row['material']."</td>
    		<td>".$row['quantity']."</td>
			<td>".$row['unit cost']."</td>
			<td>".$total."</td>
  			</tr>";
			$i=$i+1;
		}				
				
$total=$_GET['quantity']*$_GET['unit'];
$sum+=$total;
include'../plug_in/sum_fords.php';				
		echo "	
    		<td>".$arrrrrt."</td>
			<td>".$f_name."</td>
			<td>".$_GET['description']."</td>
			<td>".$_GET['type']."</td>
			<td>".$_GET['material']."</td>
			<td>".$_GET['quantity']."</td>
			<td>".$_GET['unit']."</td>	
			<td>".$total."</td>		
  		</tr><tr><td>Total</td><td colspan='6'  align='center'>".convert_number_to_words($sum)." rupees only</td><td>".number_format($sum, 2)."</td></tr></table><br>
* This total price is negotiated with with tax and discount!
		";
		
		}
		
		
		echo "<div align='center' id='temp'>
		<br><input type='button' onclick='vurgent()' value='Add Job' />
		<input type='button' onclick='savein()' value='Save This Invoice' />
		</div>";
		
	}else{
		echo "<table id='report_table_red'>
  		<tr>
			<th>
			No Customers Found!
			<input type='button' onclick='asd()' value='Enter Customer ID' />
			<input type='text' name='cuos_id' id='cuos_id' hidden='true' value='".$row['customer_id']."'  disabled='disabled' />
			</th>
		</tr>
			</table>";
	}
	
}

?>
