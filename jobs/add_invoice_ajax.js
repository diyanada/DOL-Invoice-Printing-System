// JavaScript Document
function elgg(srt){
var url="add_invoice_new_ajax.php?log=time";

url=url+"&sid="+Math.random();

//alert(document.getElementById("time").value);

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
//document.getElementById("time").value
document.getElementById("timezzz").innerHTML=xmlhttp.responseText;

    }
  
 }
xmlhttp.open("GET",url +"&str="+srt,true);
xmlhttp.send(); 
}
//-------------------------------------------------------------------------------------------------------------
function savein()
{

if (document.getElementById('time').value=="") {
		alert("Checked Some Radio Button");	
	}


else{
var url="add_invoice_new_ajax.php?log=timewkk";

url=url+"&sid="+Math.random();

//alert("yoooo");

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
//document.getElementById("time").value
document.getElementById("temp").innerHTML=xmlhttp.responseText;
  
    }
  
 }
xmlhttp.open("GET",url +"&cuos_id="+document.getElementById('cuos_id').value
+"&Remarks_in="+document.getElementById('Remarks_in').value
+"&time="+document.getElementById('time').value
+"&urgent="+document.getElementById('urgent').value
			 +"&rand="+document.getElementById('rand').value ,true);
xmlhttp.send();  
}
}
//----------------------------------------------------------------------------------------------------------------


//----------------------------------------------------------------------------------------------------------------


function addjob()
{
var namefst = document.getElementById('quantity').value;
var namefst2 = document.getElementById('unit').value;
var namefst3 = document.getElementById('file').value;
var alphaExp = /^[0-9]+$/;
var alphaExp2 = /^[.0-9]+$/;

	
    if(document.getElementById('quantity').value==""){
		alert("Quantity Can't be Null.");
	}
	else if (!namefst.match(alphaExp)) {
		alert("Quantity Only be Numbers.");	
	}		
	else if(document.getElementById('unit').value==""){
		alert("Unit Cost Can't be Null.");
	}
	else if (!namefst2.match(alphaExp2)) {
		alert("Unit Cost Only be Numbers.");	
	}
	else if (namefst2.charAt(namefst2.length-3)!=".") {
		alert("Unit Cost Format is (XXXXX.XX) \n eg:- 1250.00 Rs.");	
	}


		else{
			
			
var url="add_invoice_second_ajax.php?log=todbjs";

url=url+"&sid="+Math.random();

//alert(str);

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
//document.getElementById("time").value
document.getElementById("resoult").innerHTML=xmlhttp.responseText;
  
    }
  
 }
xmlhttp.open("GET",url +"&search="+document.getElementById('cuos_id').value
			 +"&file="+document.getElementById('file').value
			 +"&description="+document.getElementById('description').value
			 +"&type="+document.getElementById('type').value
			 +"&material="+document.getElementById('material').value
			 +"&quantity="+document.getElementById('quantity').value
			 +"&unit="+document.getElementById('unit').value
			 +"&number="+document.getElementById('num').value
			 +"&rand="+document.getElementById('rand').value ,true);
xmlhttp.send();  
}
}
//----------------------------------------------------------------------------------------------------------------




function vurgent()
{

var url="add_invoice_ajax.php?log=timewkk";

url=url+"&sid="+Math.random();

//alert(str);

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
//document.getElementById("time").value
document.getElementById("temp").innerHTML=xmlhttp.responseText;
  
    }
  
 }
xmlhttp.open("GET",url +"&cuos_id="+document.getElementById('cuos_id').value
				+"&num="+document.getElementById('num').value

			 +"&rand="+document.getElementById('rand').value ,true);
xmlhttp.send();  
}
//----------------------------------------------------------------------------------------------------------------

function todbphp(str)
{
var url="add_invoice_ajax.php?log=todbjs";

url=url+"&sid="+Math.random();

//alert(str);

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
xmlhttp.open("GET",url +"&search="+str,true);
xmlhttp.send();  
}