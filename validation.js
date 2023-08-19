// JavaScript Document

function app()
{
	flag=true;
	var b=document.appointment.title.value;
	var c=document.appointment.fname.value;
	var d=document.appointment.lname.value;
	var e=document.appointment.gender.value;
	var f=document.appointment.status.value;
	var g=document.appointment.date.value;
	var h=document.appointment.address.value;
	var i1=document.appointment.mno.value;
	var j=document.appointment.eid.value;
	var k=document.appointment.password.value;
	var l=document.appointment.reason.value;
	var m=document.appointment.date1.value;
	var n=document.appointment.department.value;
	var at=0;
	var d1=0;
	var eid=j.length;
	var len=k.length;
	var alpha=/^[a-z,A-Z]+$/;
	var alpha1=/^[0-9]+$/;
	var alpha2=/^[A-Z]+$/;
	var first=c.charAt(0);
	var first1=i1.charAt(0);
	for(i=0;i<eid;i++)
	{
		var ad=j.charAt(i);
		if(ad=="@")
		{
			at++;
		}
		if(ad==".")
		{
			d1++;
		}
	}
	if(at!=1 || d1<1)
	{
		document.getElementById('em').innerHTML="Invalid Email";
		flag=false;
	}
	if(b==""||c==""||d==""||e==""||f==""||g==""||h==""||i1==""||j==""||k==""||l==""||m==""||n=="")
	{
	alert("Fill in the blank field");
	flag=false;	
	}
	if(c!="")
	{
		if(!(c.match(alpha)))
		{
			document.getElementById('fn').innerHTML="Enter only characters";
			flag=false;
		}
		else if(!(first.match(alpha2)))
		{
			document.getElementById('fn').innerHTML="First letter should be capital";
			flag=false;	
		}
	}
	if(i1.length!=10)
	{
		document.getElementById('mn').innerHTML="Mobile no should be 10 digits";
		flag=false;
	}
	else if(!(i1.match(alpha1)))
	{
		document.getElementById('mn').innerHTML="Enter only digits";
		flag=false;
	}
	else if(first1<6)
	{
		document.getElementById('mn').innerHTML="Your number is wrong";
		flag=false;
	}
	if(len<5)
	{
		document.appointment.password.style.background="red";
	}
	else if(len>5)
	{
		document.appointment.password.style.background="green";
	}
	return flag;
	
}

function feed()
{
	flag=true;
	var a=document.feedback.fname.value;
	var b=document.feedback.dov.value;
	var c=document.feedback.address.value;
	var d=document.feedback.mno.value;
	var e=document.feedback.eid.value;
	var f=document.feedback.comments.value;
	var at=0;
	var d1=0;
	var eid=e.length;
	var alpha=/^[a-z,A-Z]+$/;
	var alpha1=/^[0-9]+$/;
	var alpha2=/^[A-Z]+$/;
	var first=a.charAt(0);
	var first1=d.charAt(0);
	for(i=0;i<eid;i++)
	{
		var ad=e.charAt(i);
		if(ad=="@")
		{
			at++;
		}
		if(ad==".")
		{
			d1++;
		}
	}
	if(at!=1 || d1<1)
	{
		document.getElementById('em').innerHTML="Invalid Email id";
		flag=false;
	}
	if(a==""||b==""||c==""||d==""||e==""||f=="")
	{
	alert("Fill in the blank field");
	flag=false;	
	}
	if(a!="")
	{
		if(!(a.match(alpha)))
		{
			document.getElementById('n').innerHTML="Enter only characters";
			flag=false;
		}
		else if(!(first.match(alpha2)))
		{
			document.getElementById('n').innerHTML="First letter should be capital";
			flag=false;	
		}
		
	}
	if(d.length!=10)
	{
		document.getElementById('mn').innerHTML="Mobile no should be 10 digits";
		flag=false;
	}
	else if(!(d.match(alpha1)))
	{
		document.getElementById('mn').innerHTML="Enter only digits";
		flag=false;
	}
	else if(first1<6)
	{
		document.getElementById('mn').innerHTML="Your number is wrong";
		flag=false;
	}
	return flag;
}

function log_pat()
{
	flag=true;
	var a=document.loginpat.id.value;
	var b=document.loginpat.password.value;
	if(a==""||b=="")
	{
	alert("Fill in the blank field");
	flag=false;	
	}
	return flag;
}

