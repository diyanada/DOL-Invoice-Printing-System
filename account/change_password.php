<?php 
require_once("../session.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DOL-Invoice Management System</title>
<link rel="stylesheet" type="text/css" href="../css/container_style.css" />
<script  src="change_password_ajax.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container"> <!--------------------- open container div -------------------------->
  
<?php 
require_once("../plug_in/non_user.php")
 ?>
  <div id="body">
    <table align="center" width="450" height="140" id="input_table">
      <tr>
        <th colspan="3" align="center">Change DOL-LMS Account Password</th>
      </tr>

      <tr>
        <td><strong> Old Password </strong></td>
      </tr>
      <tr>
        <td colspan="1"><strong>
          <input type="password" name="user_opw" id="user_opw" width="200" height="25" />
          </strong></td>
        <td><div id="usermandatory"></div></td>
      <tr>
        <td><strong> New Password </strong></td>
      </tr>
      <tr>
        <td colspan="1"><strong>
          <input type="password" name="user_pas" id="user_pas" width="200" height="25" />
          </strong></td>
        <td><div id="passmandatory"></div></td>
      <tr>
      <tr>
        <td><strong> New Confirm Password </strong></td>
      </tr>
      <tr>
        <td colspan="1"><strong>
          <input type="password" name="user_cps" id="user_cps" width="200" height="25" />
          </strong></td>
        <td><div id="conpassmandatory"></div></td>
      <tr>
        <td colspan="3"><div align="center">
            <input type='button' id='button' value="Change" onclick="todbphp()" />
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