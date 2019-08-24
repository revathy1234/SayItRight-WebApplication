function lnameValidate()
{
	var lname= document.getElementById("lname").value;

	if(lname.length==0)
	{
		producepromt("LastName is required","lab1","red");
		return false;
	}
	if(!lname.match(/^[a-zA-Z]*$/))
	{
		producepromt("LastName : Enter only alphabets","lab1","red");
		return false;
	}
	producepromt(" ","lab1","red");
	return true;
}

function mailValidate()
{
	var mail= document.getElementById("mail").value;

	if(mail.length==0)
	{
		producepromt("Email is required","lab1","red");
		return false;
	}

	if(!mail.match(/^[a-zA-Z0-9\._\-]*[@][a-zA-Z]*[\.][a-z]{2,4}$/))
	{
		producepromt("Invalid. Recommended format : xxx@yyy.zzz","lab1","red");
		return false;
	}

	producepromt("Email valid","lab1","green");
	return true;
}

function passValidate()
{
	var pass= document.getElementById("pass").value;

	if(pass.length==0)
	{
		producepromt("Password is required","lab1","red");
		return false;
	}
	if(pass.length<8)
	{
		producepromt("Password must be atleast 8 characters","lab1","red");
		return false;
	}
	producepromt("Password valid","lab1","green");
	return true;
}

function producepromt(message,position,color)
{
	document.getElementById(position).innerHTML=message;
	document.getElementById(position).style.color=color;
}

function jsShow(id)
{
	document.getElementById(id).style.display="block";
}

function jsHide(id)
{
	document.getElementById(id).style.display="none";

}

function validate()
{
	if(!lnameValidate() || !mailValidate() || !passValidate())
	{
		jsShow("commentprompt");
		producepromt("Form must be valid to submit","commentprompt","red");
		setTimeout(function(){jsHide("commentprompt")},2000);
	}
}