<?php

require_once("../session.php");
include '../connphp.php';

$sql="SELECT firstname , lastname , email , gender , dob , adressline , Adresslinesecond , City , country , tel , mobile , photo 
FROM userdetails 
WHERE userdetails.userid = '".$_SESSION['Userid']."'";

	$result=mysql_query($sql) or die("couldnt run the query : ".$sql);
	$row=mysql_fetch_array($result);
	//echo $sql;

echo "
<div id='topbanner'> 	<!-------------------- open topbanner div --------------------------->

<div id='banner'>		<!------------------ open banner div    ----------------------------->
<a href='../main/main_admin.php'> <img src='../img/02.png' width='1024' height='156' border='0' /> </a>
</div>					<!------------------ open banner div    ----------------------------->

<div id='menu'>			<!--------------------- open menu div ------------------------------->

<ul id='MenuBar1' class='MenuBarHorizontal'>

  <li><a class='MenuBarItemSubmenu' href='#'> Master </a>
    <ul> <!--aa-->
 

</ul> <!--aa-->
</li>
          
 <!--*********************************************************************************     -->    
          
<li><a class='MenuBarItemSubmenu' href='#'> issue </a>
  
<ul> 
<li><a href='../issue/issue_books.php'> Issue Books </a> </li>
      <ul> <!--bb-->

    </ul>
</li>

</ul> 
</li>

  
  
  
 <!--*********************************************************************************     -->    
  
  
  <li><a class='MenuBarItemSubmenu' href='#'> Books (Code)  </a>
  
  <ul> 
    <li> <a href='#'> Enter (Books) </a> 
   <ul> 	
<li><a href='../newadds/add_book_dtails.php'> Add New Books Details </a> </li>  
<li><a href='../newadds/book_pic_upload.php'> books Picture Upload </a> </li> 
</ul>
</li>
    <li> <a href='#'> Enter (Author) </a> 
   <ul> 	
<li><a href='../newadds/add_author_dtails.php'> Add New Authors Details </a> </li> 
<li><a href='../newadds/author_pic_upload.php'> Author Picture Upload </a> </li> 
</ul>
</li>
<li><a href='../newadds/add_book_publishers.php'> Add Book Publishers </a> </li>
<li><a href='../item/add_item_books.php'> Add Items (Books) </a> </li>
<li><a href='../item/item_more_details.php'> item manager (Books) </a> </li>
</ul>

  
  
 <!--*********************************************************************************     -->    
  
  
<li> <a class='MenuBarItemSubmenu' href='#'> User Management </a> 
    <ul> <!--aa-->
      
<li> <a href='../usermanagement/new_user_approve.php'> New User Approve </a> </li>
<li> <a href='../usermanagement/user_search.php'> Search Users </a> </li>
<li> <a href='../usermanagement/user_id_search.php'> DOL-LMS ID </a> </li>
<li> <a href='#'> User Details </a> 
<ul> <!--bb-->  
<li> <a href='../usermanagement/user_details.php'> User Details </a> </li>
<li> <a href='../usermanagement/admin_details.php'> Administrator Details </a> </li>
<li> <a href='../usermanagement/deleted_user_details.php'> Deleted User Details </a> </li>
</ul> <!--bb-->  
</li>
	
<li> <a href='#'> ".$row['firstname']." </a> 
     <ul> <!--bb-->  	
<li><a href='../account/new_profile_pic_upload.php'> Profile Picture Upload </a> </li>
<li><a href='../account/user_profile.php'> ".$row['firstname']." </a> </li>
<li><a href='../account/change_password.php'> Change Password </a> </li>
<li><a href='../account/user_details_change.php'> Change Your Details </a> </li>
<li><a href='../account/user_logout.php'> Logout </a> </li>
	</ul> <!--bb-->
    
</li>
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