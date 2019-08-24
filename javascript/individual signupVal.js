function fnameValidate()
{
	var fname= document.getElementById("fname").value;

	if(fname.length==0)
	{
		producepromt("FirstName is required","lab1","red");
		return false;
	}
	if(!fname.match(/^[a-zA-Z]*$/))
	{
		producepromt("FirstName : Enter only alphabets","lab1","red");
		return false;
	}
	producepromt(" ","lab1","red");
	return true;
}

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

function pworkValidate()
{
	var pname= document.getElementById("pwork").value;

	if(pname.length==0)
	{
		producepromt("Placework is required","lab1","red");
		return false;
	}
	if(!pname.match(/^[a-zA-Z]*$/))
	{
		producepromt("Placework : Enter only alphabets","lab1","red");
		return false;
	}
	producepromt(" ","lab1","red");
	return true;
}

function snameValidate()
{
	var sname= document.getElementById("sname").value;

	if(sname.length==0)
	{
		producepromt("SchoolName is required","lab1","red");
		return false;
	}
	if(!sname.match(/^[a-zA-Z]*$/))
	{
		producepromt("SchoolName : Enter only alphabets","lab1","red");
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
	if(!fnameValidate() || !lnameValidate() || !phoneValidate() || !msgValidate() || !mailValidate() || !passValidate())
	{
		jsShow("commentprompt");
		producepromt("Form must be valid to submit","commentprompt","red");
		setTimeout(function(){jsHide("commentprompt")},2000);
	}
}