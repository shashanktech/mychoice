function validation()
{

var code=document.getElementById("reg_id_1").value;
var name=document.getElementById("reg_id_1").value;
var approved=document.getElementById("reg_id_4").value;
var faculty=document.getElementById("reg_id_5").value;
var estd=document.getElementById("reg_id_6").value;
var email=document.getElementById("reg_id_7").value;

if(code =="")
{
	document.getElementById("reg_id_1").style.border="1px solid red";
	document.getElementById("1").style.display="block";
	
}

}

/*function checkEmail()
{
	var email=document.getElementById("reg_id_7");
	var filter=/^([a-zA-z)-9_\.\-])+\@(([a-zA-z0-9\-])+\.)+([a-zA-z0-9]{2,4})+$/;
if(!filter.test(email.value))
{
	alert("PLEASE provide a valid email address");
	email.value="";
	email.focus();
	return false;
}
}*/

function checkcontact()
{
 var contact=document.getElementById("reg_id_16");
 var abc	=	contact.value;
 alert(abc);
 if(isNaN(abc)){

 	alert("hi");
 }
	
}
function checkpincode()
{
	var pincode=document.getElementById("reg_id_12");
	var pat1=/^\d{6}$/;
	if (!pat1.test(pincode.value))  
		{
            alert("Pin code should be 6 digits ");    
            pincode.value="";
            pincode.focus();
            return false;
        }
}

function checkbatch()
{
  var batch=document.getElementById("reg_id_27")
  if(batch.value<0)
  {
  	alert("Input Greater Than One");
  }
}