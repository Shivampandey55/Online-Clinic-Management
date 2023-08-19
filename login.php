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
	<div class="login_patient_form">
	<form action="login1.php" name="loginpat" method="post" onSubmit="return log_pat()">
	<table width="500px" align="center" style="background:url(images/Client-Login_bg.gif);height:220px;width:550px">
	<tr>
	<th align="left" colspan="3" style="background:#6699CC;color:#FFFFFF;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;font-size:24px">Patient Login</th>
	</tr>
	<tr>
	<th width="200px" align="right">Patient ID:</th><th width="300px" align="left"><input type="text" name="id" /></th>
	</tr>
	<tr>
	<th width="200px" align="right">Password:</th><th width="300px" align="left"><input type="password" name="password" /></th>
	</tr>
	<tr>
	<th colspan="3"><input type="submit" value="submit" /></th>
	</tr>
	<tr>
	<th align="right"><a href="forgot.php" style="text-decoration:none;color:#003366;font-size:13px;font-family:'Arial Narrow', Arial, Helvetica, sans-serif">Forgot Password</a></th><th align="left"><a href="password.php" style="text-decoration:none;color:#003366;font-size:13px;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;margin-left:30px">Change Password</a><a href="appointment.php" style="text-decoration:none;color:#003366;font-size:13px;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;margin-left:50px">Register</a></th>
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