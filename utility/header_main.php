<?php

require_once("../session.php");
include '../conn.php';


echo "
<div id='topbanner'> 	<!-------------------- open topbanner div --------------------------->

<div id='banner'>		<!------------------ open banner div    ----------------------------->
<a href='../main/main.php'> <img src='../img/02.png' width='1024' height='156' border='0' /> </a>
</div>					<!------------------ open banner div    ----------------------------->

<div id='menu'>			<!--------------------- open menu div ------------------------------->

<ul id='MenuBar1' class='MenuBarHorizontal'>

  <li><a class='MenuBarItemSubmenu' href='#'> Jobs </a>
    <ul> <!--aa-->
<li><a href='../jobs/get_customer.php'> Add / Get Customer </a> </li>
<li><a href='../jobs/add_customer.php'> Add Customer </a> </li>
<li><a href='../jobs/add_invoice.php?coustomer='> Add Invoice </a> </li>

</ul> <!--aa-->
</li>
          
 <!--*********************************************************************************     -->    
          
<li><a class='MenuBarItemSubmenu' href='#'> Invoice </a>
  
<ul> 
<li><a href='../invoice/get_invoice.php'> Invoice </a> </li>
</li>

</ul> 
</li>

  
  
  
 <!--*********************************************************************************     -->    
  
  
  <li><a class='MenuBarItemSubmenu' href='#'> Issue  </a>
  
  <ul> 
    <li> <a href='#'> Issue Order </a> 
    
</ul>
</li>
  
  
 <!--*********************************************************************************     -->    
  
  
<li> <a class='MenuBarItemSubmenu' href='#'> ".$_SESSION['User']." </a> 
    <ul> <!--aa-->
 	

<li><a href='../account/change_password.php'> Change Password </a> </li>
<li><a href='../account/user_logout.php'> Logout </a> </li>
	
</ul> <!--aa-->
</li>


</ul>
</div>  	<!--------------------- close menu div ------------------------------->
</div> 		<!-------------------- close topbanner div --------------------------->

<script type='text/javascript'>
<!--
var MenuBar1 = new Spry.Widget.MenuBar('MenuBar1', {imgDown:'SpryAssets/SpryMenuBarDownHover.gif', imgRight:'SpryAssets/SpryMenuBarRightHover.gif'});
//-->
</script>

"
?>