<?php
include("header.php");
?>
<html>
<head>
<title></title>
<link href="style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/sliderman.1.3.7.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
</head>
<body>

<div class="banner1">
<marquee behavior="alternate">
					<img src="images/diagnostic-center.jpg" width="500" height="250" alt="" title="" />
					<img src="images/ct scan.jpg" width="500" height="250" alt="" title="" />
					<img src="images/color_dop.jpg" width="500" height="250" alt="" title="" />
					<img src="images/ecg.png" width="500" height="250" alt="" title="" />
					<img src="images/ecg_machine.jpg" width="500" height="250" alt="" title="" />
					<img src="images/hematology.jpg" width="500" height="250" alt="" title="" />
					<img src="images/pathology-and-dna.jpg" width="500" height="250" alt="" title="" />
					<img src="images/pft.gif" width="500" height="250" alt="" title="" />
					<img src="images/research.jpg" width="500" height="250" alt="" title="" />
					<img src="images/test.jpg" width="500" height="250" alt="" title="" />
					<img src="images/tmt.jpg" width="500" height="250" alt="" title="" />
					<img src="images/Ultrasound-Machine.jpg" width="500" height="250" alt="" title="" />
					<img src="images/urine-and-drug-testing.jpg" width="500" height="250" alt="" title="" />
					<img src="images/x-ray.jpg" width="500" height="250" alt="" title="" />
					<img src="images/chemist.png" width="500" height="250" alt="" title="" />
	
</marquee>
</div>	
<div class="login_lab">
	<div class="login_lab_form">
	<form action="lab1.php" name="loginlab" method="post">
	<table width="500px" height="250px" align="center" style="background:url(images/bg-content.jpg);">
	<tr>
	<th align="center" colspan="2" style="color:#CC6633;font-family:gabriola;font-size:30px">Lab Login</th>
	</tr>
	<tr>
	<th width="200px" align="right">Username:</th><th width="300px" align="left"><input type="text" name="username" /></th>
	</tr>
	<tr>
	<th width="200px" align="right">Password:</th><th width="300px" align="left"><input type="password" name="password" /></th>
	</tr>
	<tr>
	<th colspan="2"><input type="submit" value="submit" /></th>
	</tr>
	<tr>
	<th align="right"><a href="forgot(lab).php" style="text-decoration:none;color:#003366;font-size:13px;font-family:'Arial Narrow', Arial, Helvetica, sans-serif">Forgot Password</a></th><th align="center"><a href="password(lab).php" style="text-decoration:none;color:#003366;font-size:13px;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;margin-left:30px">Change Password</a></th>
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