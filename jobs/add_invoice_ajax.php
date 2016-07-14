<?php 


//----------------------------------------------------------------------------------------------------------------
	if($_GET['log']=="timewkk")
{
	
	include'../conn.php';

$sql="SELECT * FROM `type` ";

//echo $sql;
$result =mysql_query($sql);	
$asd="";
$ru="";
		while($row=mysql_fetch_array($result)){
			
$ru=" :[".$row['type_id']."]: ".$row['type']." : ".$row['sub_type']." : ".$row['second_sub'];

$asd.="<option value='".$row['type_id']."'>".$ru."</option>";
		}
		
$sql="SELECT * FROM `material` ";

//echo $sql;
$result =mysql_query($sql);	
$asd2="";
$ru="";
		while($row=mysql_fetch_array($result)){
			
$ru=$row['material_id']." : ".$row['material'];

$asd2.="<option value='".$row['material_id']."'>".$ru."</option>";
		}
if(isset($_POST['myname'])) { $rty = htmlentities ($_POST['myname']); }	
	echo"
	    <table align='center' width='450' height='140' id='input_table'>
      <tr>
        <th colspan='3' align='center'>Add Job To Invoice</th>
      </tr>
      <tr>
        <td><strong> Job </strong></td>
      </tr>
      <tr>
        <td colspan='2'>

<input type='file' name='file' id='file' >
<input type='submit' name='submit' value='Upload'>

		</td>
	</tr>
	<tr><td colspan='3'><div align='center' id='temp2'></td></div></tr>
          <tr>
        <td><strong> Description </strong></td>
      </tr>
      <tr>
        <td ><strong>
          <textarea name='description' id='description' cols='80'></textarea>
          </strong></td>
	</tr>
	<tr>
        <td><strong> Type </strong></td>
      </tr>
      <tr>
        <td ><strong>
          <select name='type' id='type'>".$asd."</select>
          </strong></td>
	</tr>
	
	<tr>
        <td><strong> Material </strong></td>
      </tr>
      <tr>
        <td ><strong>
          <select name='material' id='material'>".$asd2."</select>
          </strong></td>
	</tr>
	
	<tr>
        <td><strong> Quantity  </strong></td>
      </tr>
      <tr>
        <td ><strong>
          <input type='text' name='quantity' id='quantity' value='1' />
          </strong></td>
	</tr>
	
		<tr>
        <td><strong> Unit Cost  </strong></td>
      </tr>
      <tr>
        <td ><strong>
          <input type='text' name='unit' id='unit' /> Rs.
          </strong></td>
	</tr>

    </table>
	<br><input type='button' onclick='addjob()' value='Add This Job' />
	";
}

//----------------------------------------------------------------------------------------------------------------
	if($_GET['log']=="todbjs")
{	
include'../conn.php';

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
			<input type='text' name='cuos_id' id='cuos_id'  value='".$row['customer_id']."'/>
			<input type='text' name='rand' id='rand'  value='".rand(1, 9999999999999999)."'  />
			<input type='text' name='num' id='num'  value='0'  />
			</td>
  			</tr>";

		echo "</table>";
		echo "<div align='center' id='temp'>
		<br><input type='button' onclick='vurgent()' value='Add New Job' />
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
