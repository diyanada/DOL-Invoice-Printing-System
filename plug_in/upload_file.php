<?php 

require_once("../session.php");
include'../company.php';

$ext = substr($_FILES['file']['name'], strpos($_FILES['file']['name'],'.'), strlen($_FILES['file']['name'])-1);

$allowedExts = array("gif", "jpeg", "jpg", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));

$filenamein= $DF_data."jobs/".date("Y")."/".date("F")."/".$_POST["rand"];

if (!file_exists($filenamein)) {
    mkdir($filenamein, 0777, true);
	 mkdir($filenamein."/Old_Pic", 0777, true);
}	

    if (file_exists($filenamein."/".$_FILES['file']['name']))
      {
      rename( $filenamein."/".$_FILES['file']['name'] , 
	  $filenamein."/Old_Pic/".$_FILES['file']['name']);
	  
	  $wer=move_uploaded_file($_FILES["file"]["tmp_name"],
      $filenamein."/".$_FILES['file']['name']);

	  
      }
    else
      {
      $wer2=move_uploaded_file($_FILES["file"]["tmp_name"],
      $filenamein."/".$_FILES['file']['name']);
      }

if(!$wer and !$wer2)
{
echo '<script type="text/javascript">    alert("something wrong in your upload please try again!")   </script>';
echo '<script type="text/javascript">    window.open("", "_self", "");   window.close();    </script>';  	
}
else{	  
echo '<script type="text/javascript">    alert("Successfully Updated Your File")   </script>';  
	

//echo $_FILES['file']['name'];

echo '<script type="text/javascript">    window.open("", "_self", "");   window.close();    </script>';  

}
?>