// JavaScript Document
        function printDiv(divID, str, copy) {
			//alert (str);
		
            //Get the HTML of div
            var divElements = document.getElementById('print').innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;
			
			todbphp(divID, str, copy);
			

          
        }

//----------------------------------------------------------------------------------------------------------------

function todbphp(divID, str, copy)
{
var url="invoice_ajax.php?log=todbjs";

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
xmlhttp.open("GET",url +"&invoice_id="+str
			 +"&copy="+copy,true);
xmlhttp.send();  
}