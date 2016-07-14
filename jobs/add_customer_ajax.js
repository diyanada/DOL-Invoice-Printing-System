// JavaScript Document


function todbphp()
{
//

var namefst = document.getElementById('name_first').value;
var alphaExp = /^[a-z A-Z]+$/;


	if(document.getElementById('name_first').value==""){
		alert("Name Can't be Null.");
	}
	else if (!namefst.match(alphaExp)) {
		alert("Name Only be Letter.");	
	}		
	else if(document.getElementById('user_ad1').value==""){
		alert("Adress line 1 Can't be Null.");
	}
	else if(document.getElementById('user_cty').value==""){
		alert("City Name Can't be Null.");
	}
	else if(document.getElementById('user_cun').value==""){
		alert("Country Name Can't be Null.");
	}
	else if(document.getElementById('user_tel').value==""){
		alert("Telephone Number Can't be Null.");
	}
	else if(isNaN(document.getElementById('user_tel').value)){
			alert("Telephone Number should have Only Numbers");
   }
   else if(document.getElementById('user_tel').value.length!=10){
				alert("Telephone Number should have only 10 digits");
	}
   else if(isNaN(document.getElementById('user_mob').value)){
			alert("Mobile Number should have Only Numbers");
   }
   else if((document.getElementById('user_mob').value!="") && (document.getElementById('user_mob').value.length!=10)){
			alert("Mobile Number should have only 10 digits");
	}


		else{
			
var url="add_customer_ajax.php?log=todbjs";

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
xmlhttp.open("GET",url +"&name_first="+document.getElementById('name_first').value
			 +"&user_mail="+document.getElementById('user_mail').value  
			 +"&user_ad1="+document.getElementById('user_ad1').value  
			 +"&user_cty="+document.getElementById('user_cty').value 
			 +"&user_cun="+document.getElementById('user_cun').value 
			 +"&user_tel="+document.getElementById('user_tel').value 
			 +"&user_mob="+document.getElementById('user_mob').value ,true);
xmlhttp.send();  
}
}