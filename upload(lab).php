<?php
$a5=$_REQUEST['a5'];

session_start();
if(!(isset($_SESSION['username'])))
{
	header("location:test1.php");
}
$a=$_SESSION['username'];

include_once("connect.php");
$c=mysqli_query($con,"select * from lab_test where lab_id='$a5'");
if($d=mysqli_fetch_array($c))
{
$lid=$d['lab_id'];
}
$_SESSION['pid']=$lid;
?>
<html>
<head>
<title></title>
</head>
<body style="background:url(images/background2.jpg) no-repeat center">
<table width="100%">
<tr>
<th width="50%" align="right" valign="top"><a href="logout(lab).php" style="font-size:20px;color:red;font-family:'Courier New', Courier, monospace;">Logout</a></th>
</tr>
</table>
<table width="100%" align="center" style="margin-top:100px">
<tr><th>
<form action="report(lab).php" method="post" enctype="multipart/form-data">
<font style="color:#3366CC;font-family:gabriola;font-size:24px">Report</font>&nbsp;&nbsp;&nbsp;<input type="file" name="report" style="color:#666699;" /><br />
<input type="submit" value="Upload" style="background:#CC3366;color:white;font-size:22px;font-family:gabriola" />
</form>
</th></tr>
</table>
</body>
</html>