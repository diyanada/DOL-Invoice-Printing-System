// JavaScript Document


//------------------------------------------------------------------------------

function passup(str)
{ 
	//alert (str);
var url="change_password_ajax.php?q="+str+"&log=passstrjax";

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
document.getElementById("passmandatory").innerHTML=xmlhttp.responseText;
  
    }
  
 }
 xmlhttp.open("POST",url,true);
xmlhttp.send(); 
}

//------------------------------------------------------------------------------

function cnpsup(str)
{ 
	//alert (str);
var url="change_password_ajax.php?q="+str+"&log=conpastrjax";
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
document.getElementById("conpassmandatory").innerHTML=xmlhttp.responseText;
  
    }
  
 }
xmlhttp.open("GET",url +"&user_pastp="+document.getElementById('user_pas').value  
			 +"&user_cpstp="+document.getElementById('user_cps').value,true);
xmlhttp.send(); 
}
//------------------------------------------------------------------------------
function todbphp()
{

	if(document.getElementById('user_opw').value==""){
		alert("Old Password Can't be Null.");
	}
	
	else if(document.getElementById('user_pas').value==""){
		alert("Password Can't be Null.");
	}
	else if(document.getElementById('user_cps').value==""){
		alert("Confirm Password Can't be Null.");
	}


		else{
			
var url="change_password_ajax.php?log=todbjs";

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
xmlhttp.open("GET",url +"&user_opw="+document.getElementById('user_opw').value
			 +"&user_pas="+document.getElementById('user_pas').value 
			 +"&user_cps="+document.getElementById('user_cps').value,true);
xmlhttp.send();  
}
}