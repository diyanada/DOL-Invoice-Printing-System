<?php 
require_once("../session.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DOL-Invoice Printing System</title>

<link rel="stylesheet" type="text/css" href="../css/container_style.css" />

<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="get_customer_ajax.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body> 				 
<div id="container"> 	<!--------------------- open container div -------------------------->

<?php 
require_once("../plug_in/non_user.php")
 ?>

<div id="body">	<!--------------------- open body div -------------------------->


<table align="center" width="480" height="100%" id="input_table">
<tr>
<th colspan="3" > Add Get Coustomer's </th>
</tr>

<td colspan="10"><strong><div align="center">
<textarea cols="45" rows="1" name="search" id="search" onchange="todbphp()"></textarea>
</td>
</tr>
<tr><td colspan="1">Search (By DOL-Invoice Printing System ID Number or Coustomer's Name ).
<td> <input type="button" value="search" onclick="todbphp()" /> </td>
<td> <input type="button" value="Add" onclick="god()" /> </td>
</div></strong> </td>
</tr>

 <tr>     

</tr>

  </table>
    <!--------------------- close rec_add_new_item div ------------------>
<div align="center" id="resoult"></div>
</div>      <!---- close body div ---->

<?php include("../utility/footer_main.php"); ?>

</div>	<!--------------------- close container div -------------------------->


</body>
</html>