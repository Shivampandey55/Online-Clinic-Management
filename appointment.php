<?php
include("header.php");
?>

<html>
<head>
<title></title>
<link href="style.css" type="text/css" rel="stylesheet" />
<script src="validation.js" language="javascript">
</script>
<style>
#fn
{
	color:#FF3300;
	text-decoration:blink;
}
#ln
{
	color:#FF3300;
	text-decoration:blink;
}
#mn
{
	color:#FF3300;
	text-decoration:blink;
}
#em
{
	color:#FF3300;
	text-decoration:blink;
}
#fn1
{
	color:#FF3300;
	text-decoration:blink;
}
#ln1
{
	color:#FF3300;
	text-decoration:blink;
}
#em1
{
	color:#FF3300;
	text-decoration:blink;
}
</style>
</head>
<body>
<div class="content">
	<table width="1000px" align="center" style="margin-bottom:20px;">
	<tr>
	<th style="color:#065EA8;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;font-size:20px;font-weight:bold;text-align:left;margin-left:30px">Patient Information:</th>
	</tr>
	<tr>
	<th>
	<div class="appointment">
	<form action="appointment_insert.php" method="post" name="appointment" onSubmit="return app()">	
	<table width="850px" align="center" bgcolor="#F1F1DF" height="500px" style="border:solid #666666 1px;margin-top:10px">
	<tr><th align="right" width="25%">Title<font color="#FF3300">*</font></th><th align="left">
		<select style="width:110px" name="title">
		<option value="none">Select One</option>
		<option value="mr">Mr.</option>
 	    <option value="mrs">Mrs.</option>
  		<option value="ms">Ms.</option>
 		<option value="fr">Fr.</option>
		<option value="sr">Sr.</option>
		<option value="rev">Rev</option>
		<option value="dr">Dr.</option>
		<option value="other">Other</option>
		</select>&nbsp;<span id="ti"></span></th>
		<th rowspan="5"><img src="images/appointment_chat_closed.jpg" /></th>
		</tr>
	<tr><th align="right" width="25%">First Name<font color="#FF3300">*</font></th><th align="left"><input type="text" name="fname">&nbsp;<span id="fn"></span></th></tr>
	<tr><th align="right" width="25%">Last Name<font color="#FF3300">*</font></th><th align="left"><input type="text" name="lname">&nbsp;<span id="ln"></span></th></tr>
	<tr><th align="right" width="25%">Gender<font color="#FF3300">*</font></th><th align="left">Male<input type="radio" name="gender" value="male">Female<input type="radio" name="gender" value="female" />&nbsp;<span id="gend"></span></th></tr>
	<tr><th align="right" width="25%">Marital Status<font color="#FF3300">*</font></th><th align="left">
		<select style="width:110px" name="status">
		<option value="none">Select One</option>
		<option value="married">Married</option>
 	    <option value="single">Single</option>
  		<option value="divorced">Divorced</option>
 		<option value="widowed">Widowed</option>
		<option value="dom_part">Domestic Partnership</option>
		<option value="leg_sep">Legally Separated</option>
		<option value="other">Other</option>
		</select>
	&nbsp;<span id="stat"></span></th></tr>
	<tr><th align="right" width="25%">Date of Birth<font color="#FF3300">*</font>(YYYY/MM/DD)</th><th align="left"><input type="text" name="date">&nbsp;<span id="dat"></span></th></tr>
	<tr><th align="right" width="25%">Address<font color="#FF3300">*</font></th><th align="left" colspan="2"><textarea  name="address" maxlength="1000" cols="40" rows="6"></textarea>&nbsp;<span id="add"></span></th></tr>
	<tr><th align="right" width="25%">Mobile No.<font color="#FF3300">*</font></th><th align="left"><input type="text" name="mno">&nbsp;<span id="mn"></span></th></tr>
	<tr><th align="right" width="25%">Email ID<font color="#FF3300">*</font></th><th align="left"><input type="text" name="eid">&nbsp;<span id="em"></span></th></tr>
	<tr><th align="right" width="25%">Password<font color="#FF3300">*</font></th><th align="left"><input type="password" name="password">&nbsp;<span id="pas"></span></th></tr>
	</table>
	<h1 style="color:#065EA8;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;font-size:20px;font-weight:bold;text-align:left;">Appointment Details:</h1>
	<table width="850px" align="center" bgcolor="#F1F1DF" height="300px" style="border:solid #666666 1px;margin-top:10px">
	<tr><th align="right" width="25%">Reason for Appointment<font color="#FF3300">*</font></th><th align="left"><textarea  name="reason" maxlength="1000" cols="40" rows="6"></textarea>&nbsp;<span id="rs"></span></th></tr>
	<tr><th align="right" width="25%">Date of Appointment<font color="#FF3300">*</font>(YYYY/MM/DD)</th><th align="left"><input type="date" name="date1" />&nbsp;<span id="dat1"></span></th></tr>
	<tr><th align="right" width="25%">Department<font color="#FF3300">*</font></th><th align="left"><select style="width:110px" name="department">
		<option value="none">Select One</option>
		<option value="E.N.T">ENT</option>
 	    <option value="Neurologist">Neurologist</option>
  		<option value="Orthology">Orthologist</option>
		<option value="Gynaecologist">Gynaecologist</option>
		<option value="Pedeatrics">Pedeatrics</option>
		<option value="Eye specialist">Eye specialist</option>
		<option value="Dentistry">Dentistry</option>
		</select>&nbsp;<span id="dp"></span></th></tr>
	</table>
	<br />
	<input type="submit" value="submit" /><input type="button" value="reset" onClick="reset()" />
	</form>
	</div>
	</th>
	</tr>
	</table>
</div>
</body>
</html>

<?php
include("footer.php");
?>