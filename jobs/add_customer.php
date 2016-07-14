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
<script src="add_customer_ajax.js" type="text/javascript"></script>
<script src="../plug_in/e-mail.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body> 				 
<div id="container"> 	<!--------------------- open container div -------------------------->

<?php 
require_once("../plug_in/non_user.php")
 ?>


  <div id="body">
    <table align="center" width="450" height="140" id="input_table">
      <tr>
        <th colspan="3" align="center">Create a new Customer</th>
      </tr>
      <tr>
        <td><strong> Name </strong></td>
      </tr>
      <tr>
        <td colspan="2"><strong>
          <textarea name="name_first" cols="80" id="name_first"><?php echo $_GET['name'] ?></textarea>
          </strong></td>
      </tr>
      <tr>
        <td><strong> E-mail </strong></td>
      </tr>
      <tr>
        <td colspan="2"><strong>
          <textarea name="user_mail" cols="80" id="user_mail" width="400" height="25" Onchange="validate_email(this)" ></textarea>
          </strong></td>
      </tr>



      <tr>
        <td><strong> Adress </strong></td>
      </tr>
      <tr>
        <td colspan="2"><strong> 
          <textarea name="user_ad1" id="user_ad1" cols="80"></textarea>
          </strong></td>
      </tr>
      <tr>
        <td colspan="1"><strong> Address City
          <input type="text" name="user_cty" id="user_cty" width="200" height="25"/>
          </strong></td>
        <td colspan="1"><strong>
          <input type="text" name="user_cun" id="user_cun" width="200" height="25" value="Sri Lanka"/>
          </strong></td>
      </tr>
      <tr>
        <td><strong> Tel Numbers 
          <input type="text" name="user_tel" id="user_tel" width="200" height="25" maxlength="10" placeholder="Home"/>
          </strong></td>
        <td><strong>
          <input type="text" name="user_mob" id="user_mob" width="200" height="25" maxlength="10"  placeholder="Mobile" />
          </strong></td>
      </tr>
        <td colspan="3"><div align="center">
            <input type='button' id='button' value="Save" onclick="todbphp()" />
          </div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center" id="resoult"></div></td>
      </tr>
    </table>
  </div>
  <?php include("../utility/footer_main.php"); ?>
</div>
<!--------------------- close container div -------------------------->

</body>
</html>