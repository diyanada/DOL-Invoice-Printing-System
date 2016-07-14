<?php

include 'conn.php';
$url = "index.html";

	
$sql="	select * 
		from user 
		where username='".$_GET['a2']."' 
		and password='".$_GET['a3']."' 
		and active='Yes'";
		
$query=mysql_query($sql);

$row=mysql_fetch_array($query);

if($row['password']==$_GET['a3']){
	
	$url="main/main.php";
	
if($row['level']=="Admin"){
	$url="main/main_admin.php";
}

	session_start();
	$_SESSION['User']=$row['username'];
	$_SESSION['level']=$row['level'];
	$_SESSION['Password']=$row['password'];
	$_SESSION['Userid']=$row['userid'];
}
	else{
	$url = "passwrong.php";
}						 
	

echo $url;
?>
<html>
<head>
<meta http-equiv="refresh" content="0; url=<?php echo $url;?>">
</head>
<body>
</body>
</html>
