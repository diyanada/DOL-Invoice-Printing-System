// JavaScript Document

function validate_email(field,alerttxt)
{
var ressym=new Array(",","<",">","?","/","\;",":","\'","\"","{","[","}","]","\|","\\","=","+","_","-",")","(","*","\&","^","%","$","#","!","`","~"); 
var resgetsym=new Array() 
var y=0;
for(x=0;x<30;x++){
	if(field.value.indexOf(ressym[x])>-1){
			resgetsym[y]=ressym[x];	
			y=y+1;
	}
	
	}
	var i=0;
	var st="";
 while (i<resgetsym.length){
	 st=st+" "+resgetsym[i];
	 
	 
	 i++;
	 }
	 
	 if(st!=""){
	st= "You can't use "+st;
	 }
  apos=field.value.indexOf("@");
  aapos=field.value.lastIndexOf("@");
  dotpos=field.value.lastIndexOf(".");
   
  if (apos<1|dotpos-apos<2|st!=""|aapos!=apos)
    {alert("Not a valid e-mail address!"+"\n"+st);return false;}
  else {return true;}
  
}