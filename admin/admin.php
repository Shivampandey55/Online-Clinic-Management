<?php
include("outerheader.php");
?>

<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="validation.js" rel="stylesheet" type="text/javascript" />
</head>
<body>
<div class="login_admin">
	<div class="login_admin_form">
	<form action="admin1.php" name="loginadmin" method="post">
	<table width="500px" height="250px" align="center" style="background:url(images/bg-content.jpg);">
	<tr>
	<th align="center" colspan="2" style="color:#CC6633;font-family:gabriola;font-size:30px">Welcome Admin</th>
	</tr>
	<tr>
	<th width="200px" align="right">Username:</th><th width="300px" align="left"><input type="text" name="uname" /></th>
	</tr>
	<tr>
	<th width="200px" align="right">Password:</th><th width="300px" align="left"><input type="password" name="password" /></th>
	</tr>
	<tr>
	<th colspan="2"><input type="submit" value="submit" /></th>
	</tr>
	<tr>
	<th align="right"><a href="forgot(admin).php" style="text-decoration:none;color:#003366;font-size:13px;font-family:'Arial Narrow', Arial, Helvetica, sans-serif">Forgot Password</a></th><th align="center"><a href="password(admin).php" style="text-decoration:none;color:#003366;font-size:13px;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;margin-left:30px">Change Password</a></th>
	</tr>
	</table>
	</form>
	</div>
</div>
</body>
</html>
<?php
include("../footer.php");
?>