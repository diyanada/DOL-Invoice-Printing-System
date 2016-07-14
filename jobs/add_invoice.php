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
<script src="add_invoice_ajax.js" type="text/javascript"></script>



<script type="text/javascript">
var cous;
cous= <?php echo "'" . $_GET['coustomer'] . "'"; ?>; 
function asd(){
if(cous=="")
{ 
var person= prompt("Please enter Customer Id","IMS");	
cous=person;
}
todbphp(cous)
cous="";
}
asd()


    </script>


<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body> 				 
<div id="container"> 	<!--------------------- open container div -------------------------->

<?php 
require_once("../plug_in/non_user.php");
 ?>

<div id="body">	<!--------------------- open body div -------------------------->
<form action='../plug_in/upload_file.php' method='post' target="_blank" id="udata"
enctype='multipart/form-data'>

    <table align="center" width="450" height="140" id="input_table">
      <tr>
        <th colspan="3" align="center">Create a Invoice</th>
      </tr>
      <tr>
        <td><strong> Remarks </strong></td>
      </tr>
      <tr>
        <td colspan="2"><strong>
          <textarea name="Remarks_in" cols="80" id="Remarks_in"></textarea>
          </strong></td>
	</tr>
          <tr>
        <td><strong> Time </strong></td>
      </tr>
    <tr>
    <td ><strong>
          <input type="radio" name="urgent" id="urgent" value="Very Urgent" onchange="elgg(this.value)"> Very Urgent
          </strong></td>
	</tr>
    <tr>
    <td ><strong>
          <input type="radio" name="urgent" id="urgent" value="Urgent" onchange="elgg(this.value)"> Urgent
          </strong></td>
	</tr>
    <tr>
    <td ><strong>
          <input type="radio" name="urgent" id="urgent" value="Soon as Possible" onchange="elgg(this.value)"> Soon as Possible </
          </strong></td>
	</tr>
    <tr>
    <td><strong>
          <input type="radio" name="urgent" id="urgent" value="Customer Request" onchange="elgg(this.value)"> Customer Request
          </strong></td>
	</tr>
          <tr>
        <td ><strong>
          <div id="timezzz"><input type="datetime-local" id="time" name="time" value="" disabled="disabled" /></div>
          </strong></td>
	</tr>
    </table>
<br /><br />
    <!--------------------- close rec_add_new_item div ------------------>
<div align="center" id="resoult">
<div align="center" id="temp"></div>
</div>
<div align="center" id="resoult2">
</div>      <!---- close body div ---->

<?php include("../utility/footer_main.php"); ?>

</div>	<!--------------------- close container div -------------------------->

</form>
</body>
</html>