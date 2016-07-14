// JavaScript Document

//----------------------------------------------------------------------------------------------------------------

function todbphp()
{
var url="get_invoice_ajax.php?log=todbjs";

url=url+"&sid="+Math.random();



if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
document.getElementById("resoult").innerHTML=xmlhttp.responseText;
  
    }
  
 }
xmlhttp.open("GET",url +"&search="+document.getElementById('search').value,true);
xmlhttp.send();  
}