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
	return true;
}

function phoneValidate()
{
	var telnumber= document.getElementById("telnum").value;

	if(telnumber.length==0)
	{
		producepromt("10 digit phone number is required","lab1","red");
		return false;
	}
	if(telnumber.length!=10)
	{
		producepromt("Phone number : Enter only 10 digit phone number","lab1","red");
		return false;
	}
	if(!telnumber.match(/^[0-9]{10}$/))
	{
		producepromt("Phone number : Enter only digits","lab1","red");
		return false;
	}
	
	return true;
}

function msgValidate()
{
	var msg= document.getElementById("msg").value;

	if(msg.length==0)
	{
		producepromt("Message is required","lab1","red");
		return false;
	}
	else if(!msg.length>30)
	{
		return false;
	}
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
	if(!fnameValidate() || !lnameValidate() || !phoneValidate() || !msgValidate() )
	{
		jsShow("commentprompt");
		producepromt("Form must be valid to submit","commentprompt","red");
		setTimeout(function(){jsHide("commentprompt")},1000);
	}
	else
	{
		jsShow("commentprompt");
		producepromt("Form is valid","commentprompt","red");
		setTimeout(function(){jsHide("commentprompt")},1000);
	}
}

