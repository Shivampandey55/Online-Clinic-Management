<?php
$a5=$_REQUEST['a5'];

session_start();
if(!(isset($_SESSION['docid'])))
{
	header("location:doc_login.php");
}
$a=$_SESSION['docid'];

include_once("connect.php");
$c=mysqli_query($con,"select * from appointment where eid='$a5'");
if($d=mysqli_fetch_array($c))
{
$id=$d['id'];
}
$_SESSION['pid']=$id;
?>
<html>
<head>
<title></title>
</head>
<body style="background:url(images/background2.jpg) no-repeat center">
<table width="100%">
<tr>
<th width="50%" align="right" valign="top"><a href="logout(doctor).php" style="font-size:20px;color:red;font-family:'Courier New', Courier, monospace;">Logout</a></th>
</tr>
</table>
<table width="100%" align="center" style="margin-top:100px">
<tr><th>
<form action="report.php" method="post" enctype="multipart/form-data">
<font style="color:#3366CC;font-family:gabriola;font-size:24px">Report</font>&nbsp;&nbsp;&nbsp;<input type="file" name="report" style="color:#666699;" /><br />
<input type="submit" value="Upload" style="background:#CC3366;color:white;font-size:22px;font-family:gabriola" />
</form>
</th></tr>
</table>
</body>
</html>