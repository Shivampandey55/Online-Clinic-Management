<?php
include("header.php");
?>

<html>
<head>
<title></title>
<link href="validation.js" rel="stylesheet" type="text/javascript" />
</head>
<body>
<div class="login_patient">
	<div class="login_doctor_form">
	<form action="doc_login1.php" name="loginpat" method="post" onSubmit="return log_pat()">
	<table width="500px" height="250px" align="center" style="background:url(images/bg-content.jpg);">
	<tr>
	<th align="center" colspan="2" style="color:#CC6633;font-family:gabriola;font-size:30px">Doctor Login</th>
	</tr>
	<tr>
	<th width="200px" align="right">Doctor ID:</th><th width="300px" align="left"><input type="text" name="docid" /></th>
	</tr>
	<tr>
	<th width="200px" align="right">Password:</th><th width="300px" align="left"><input type="password" name="password" /></th>
	</tr>
	<tr>
	<th width="200px" align="right">Department:</th><th width="300px" align="left">
	
	<select name="dept">
	   <option value="none">Select One</option>
		<option value="E.N.T">ENT</option>
 	    <option value="Neurologist">Neurologist</option>
  		<option value="Orthology">Orthologist</option>
		<option value="Gynaecologist">Gynaecologist</option>
		<option value="Pedeatrics">Pedeatrics</option>
		<option value="Eye specialist">Eye specialist</option>
		<option value="Dentistry">Dentistry</option>
	</select>
	</th>
	</tr>
	<tr>
	<th colspan="2"><input type="submit" value="submit" /></th>
	</tr>
	<tr>
	<th align="right"><a href="forgot(doctor).php" style="text-decoration:none;color:#003366;font-size:13px;font-family:'Arial Narrow', Arial, Helvetica, sans-serif">Forgot Password</a></th><th align="left"><a href="password(doctor).php" style="text-decoration:none;color:#003366;font-size:13px;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;margin-left:30px">Change Password</a><a href="doctor(sign up).php" style="text-decoration:none;color:#003366;font-size:13px;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;margin-left:50px">Sign Up</a></th>
	</tr>
	</table>
	</form>
	</div>
</div>
</body>
</html>
<?php
include("footer.php");
?>