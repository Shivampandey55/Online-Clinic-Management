<html>
<head>
<title></title>
</head>
<body bgcolor="#CC99CC" style="background:url(images/background.jpg) no-repeat center;background-attachment:fixed">
<table width="100%" align="center">
<tr><th align="right" valign="top"><a href="logout.php" style="font-size:20px;color:green;font-family:'Courier New', Courier, monospace;">Logout</a></th></tr>
</table>
<?php
session_start();
if(!(isset($_SESSION['id'])))
{
	header("location:login.php");
}

$c=$_POST['timings'];
$d=$_SESSION['dname'];
$e=$_SESSION['dd'];
$e1=$_SESSION['did'];
$a=$_SESSION['id'];

include_once("connect.php");
$c4=mysqli_query($con,"select * from appointment where id='$a'");
echo "<table width=100%>";
if($d4=mysqli_fetch_array($c4))
{
	$fname=$d4['fname'];
}
$q=mysqli_query($con,"select * from book where timings='$c' and docid='$e1' and dd='$e'");
if($dd=mysqli_fetch_array($q))
{
echo "<script>alert('this timings are already booked')</script>";
header("location:timings2.php?a=".$c);
}
else
{

	mysqli_query($con,"insert into book values('$a','$fname','$c','$d','$e','$e1','Not_Report')")or die(mysqli_error($con));
}
?>

<?php
$a=$_SESSION['id'];
$r=mysqli_query($con,"select * from appointment where id='$a'");
echo "<table width=100%>
<tr><th width=100% align=right valign=top><a href=logout.php style=font-size:20px;color:white;font-family:'Courier New', Courier, monospace;>Logout</a></th></tr>
</table>";
while($s=mysqli_fetch_array($r))
{
echo "<table width=100%><tr><th width=50%>";
echo "<table width=100%>
		<tr><th colspan=2 style=color:#993399;font-family:'Courier New', Courier, monospace;><h1 align=left><u>Profile Information</u></h1></th></tr>
	  <tr><th width=35% height=50 align=left style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Patient ID</th><th align=left style=color:brown;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$s['id']."</th></tr>
	  <tr><th width=35% height=50 align=left style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Patient Name</th><th align=left style=color:brown;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$s['title'].".&nbsp".$s['fname']."&nbsp".$s['lname']."</th></tr>
	  <tr><th width=35% height=50 align=left style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Gender</th><th align=left style=color:brown;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$s['gender']."</th></tr>
	  <tr><th width=35% height=50 align=left style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Marital Status</th><th align=left style=color:brown;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$s['status']."</th></tr>
	  <tr><th width=35% height=50 align=left style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>DOB</th><th align=left align=left style=color:brown;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$s['date']."</th></tr>
	  <tr><th width=35% height=50 align=left style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Address</th><th align=left style=color:brown;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$s['address']."</th></tr>
	  <tr><th width=35% height=50 align=left style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Mobile No.</th><th align=left style=color:brown;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$s['mno']."</th></tr>
	  <tr><th width=35% height=50 align=left style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Email-id</th><th align=left style=color:brown;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$s['eid']."</th></tr>
	  <tr><th width=35% height=50 align=left style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Reason for Appointment</th><th align=left style=color:brown;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$s['reason']."</th></tr>
	  <tr><th width=35% height=50 align=left style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Date of Appointment</th><th align=left style=color:brown;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$s['date1']."</th></tr>";
	echo "</table>";
	  echo "</th>";
}
?>
<?php
echo "<th width=50%>";
$a=$_SESSION['id'];
$r=mysqli_query($con,"select * from book where id='$a'");
echo "<table width=100%>
		<tr><th colspan=2 style=color:#993399;font-family:'Courier New', Courier, monospace;><h1 align=left><u>Appointment Information</u></h1></th></tr>";
while($s=mysqli_fetch_array($r))
{
echo "<tr><th width=35% height=50 align=left style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Doctor ID</th><th align=left style=color:brown;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$s['docid']."</th></tr>
	  <tr><th width=35% height=50 align=left style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Doctor Name</th><th align=left style=color:brown;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$s['dname']."</th></tr>
	  <tr><th width=35% height=50 align=left style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Timings</th><th align=left style=color:brown;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$s['timings']."</th></tr>";
	
}
echo "</table>";
echo "</th>";
echo "<table>";


?>
</body>
</html>