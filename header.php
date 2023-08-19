<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/jquery.js" type="text/javascript"></script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>HOPE CLINIC</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body style="margin:0px auto">
<div class="header">
<table width="100%">
<tr>
<th>
<table width="1000px" height="80px" align="center">
<tr>
<th>
<table style="height:80px;width:200px;float:left;margin-left:-20px ;margin-top:2px;"><tr><th><a href="index.php"><img src="images/hope_clinic_logo.jpg" height="80px" width="150px"/></a></th></table>
<table style="height:80px;width:340px;float:left;margin-left:270px"><tr>
<th style="height:50px;width:170px;"><a href="staff.php">Doctors & medical staff</a></th>
<th style="height:50px;width:170px;"><a href="test1.php" target="_blank">Lab Login</a></th>
</tr>
<tr>
<th style="height:30px;width:170px;vertical-align:bottom;padding-top:15px" colspan="2">
<?php
date_default_timezone_set('asia/calcutta');
$dt=date("d,M,Y");
$dt1=date("h:i:s a");
echo "<font style=color:red;font-size:18px;font-family:chiller>".$dt."</font>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style=color:red;font-size:18px;font-family:chiller>".$dt1."</font>";
?>
</th>
</tr>
</table>

<table height="80px" width="200px">
<tr>
<th style="height:50px;width:100px"><form action="login.php" method="post"><input type="submit" value="Patient Login" style="height:35px;width:85px;background:rgb(78, 86, 102);color:rgb(195, 198, 204);font-size:12px;font-weight:bold;border-radius:20px;cursor:pointer" /></form></th>
<th style="height:50px;width:100px"><form action="doc_login.php" method="post"><input type="submit" value="Doctor Login" style="height:35px;width:85px;background:rgb(106, 183, 71) ;color:#FFFFFF;font-size:12px;font-weight:bold;border-radius:20px;cursor:pointer" /></form></th>
</tr>
<tr><th colspan="2"><form action="admin/admin.php" method="post"><input type="submit" value="Admin Login" style="height:35px;width:85px;background:blue;color:white;font-size:12px;font-weight:bold;border-radius:20px;cursor:pointer" /></form></th></tr>
</table>

</th>
</tr>
</table>
</th>
</tr>
</table>
</div>
<div class="menu">
<ul>
	<li class="selected"><a href="index.php">Home</a></li>
	<li class="selected1"><a href="aboutus.php">About Us</a></li>
	<li class="selected2"><a href="">Services</a>
	<ul>
			<li><a href="consultation.php" style="font-size:12px;">Consultations</a></li>
			<li><a href="diagnostic.php" style="font-size:12px">Diagnostics</a></li>
			<li><a href="healthcheck.php" style="font-size:12px">Health Checks</a></li>
			<li><a href="staff.php" style="font-size:12px">Doctors & medical staff</a></li>
	</ul>
	</li>
	<li class="selected3"><a href="find_doctor.php">Find a doctor</a></li>
	<li class="selected4"><a href="login.php">Appointment</a></li>
	<li class="selected5"><a href="feedback.php">Feedback</a></li>
	<li class="selected6"><a href="contactus.php">Contact us</a></li>
	<li class="selected7"><a href="gallery.php">Gallery</a></li>
	
</ul>
</div>
</body>
</html>
