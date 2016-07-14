<?php 

require_once("../session.php");
include'../company.php';

$ext = substr($_FILES['file']['name'], strpos($_FILES['file']['name'],'.'), strlen($_FILES['file']['name'])-1);

$allowedExts = array("gif", "jpeg", "jpg", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    $eroorrr="Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
$filenamein= $DF_data."jobs/".date("Y")."/".date("F")."/".$_POST["rand"];

if (!file_exists($filenamein)) {
    mkdir($filenamein, 0777, true);
	mkdir($filenamein."/Old_Pic", 0777, true);

}	

    if (file_exists($filenamein."/".$_POST["customer_id"]."DOLZ".$_POST["num"].$ext))
      {
      rename( $filenamein."/".$_POST["customer_id"]."DOLZ".$_POST["num"].$ext , 
	  $filenamein."/Old_Pic/".date("Y-m-d")."-".time("h-m-s")."DOLZ".$_POST["num"].$ext);
	  
	  move_uploaded_file($_FILES["file"]["tmp_name"],
      $filenamein."/".$_POST["customer_id"]."DOLZ".$_POST["num"].$ext);

	  
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      $filenamein."/".$_POST["customer_id"]."DOLZ".$_POST["num"].$ext);
      }
	  
echo '<script type="text/javascript">    alert("Successfully Updated Your File")   </script>';  
	

    }
	
  }
else
  {

echo '<script type="text/javascript">    alert("Sorry Your Upload Not Available Please Try Again!"'.$eroorrr.')   </script>';  
  }
echo '<script type="text/javascript">    window.open("", "_self", "");   window.close();    </script>';  
?>