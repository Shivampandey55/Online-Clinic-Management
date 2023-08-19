<html>
<head>
<title></title>
</head>
<body bgcolor="#CC99CC" style="background:url(images/background.jpg) no-repeat center">
<div class="patient_account">
<?php
session_start();
if(!(isset($_SESSION['id'])))
{
	header("location:login.php");
}
$a=$_SESSION['id'];

include_once("connect.php");
$c=mysqli_query($con,"select * from appointment where id='$a'");
echo "<table width=100%>";
if($d=mysqli_fetch_array($c))
{
    $de=$d['department'];
	echo "<tr><th width=50% align=left style=color:green;font-family:'Courier New', Courier, monospace>";
	$fname=$d['fname'];
	echo"<h1>Welcome ".$fname."</h1>";
	echo "</th>";
?>
<?php
echo"<th width=50% align=right valign=top><a href=logout.php style=font-size:20px;color:green;font-family:'Courier New', Courier, monospace;>Logout</a></th></tr>";
}
echo "</table>";
?>
<table width="500px" align="right">
<tr><th width="200px"><a href="lab_details.php" style="text-decoration:none;color:#CC6666;font-size:20px;font-family:gabriola;">Show Lab Test Appointment</a></th><th width="250px" align="right"><a href="test.php" style="text-decoration:none;color:#CC6666;font-size:20px;font-family:gabriola;">Lab Test(If Doctor Recommended)</a></th></tr>
</table>
<?php

$c1=mysqli_query($con,"select * from doctor_details where specialistin='$de'")or die(mysqli_error($con));
echo "<table width=650 align=center style=margin-top:50px;>
<tr><th width=325 border=1px style=color:red;font-family:'Courier New', Courier, monospace;><h2>".$de=$d['department']." Doctor Name</h2></th>
<th width=325 style=color:red;font-family:'Courier New', Courier, monospace;><h2>Book Appointment</h2></th>
</tr>";
while($c2=mysqli_fetch_array($c1))
{
echo "<tr><th width=325 style=color:blue;font-family:'Courier New', Courier, monospace><h3>".$c2['doctorname']."</h3></th>";
echo "<th width=325><a style=text-decoration:none;color:#FF3399;font-family:'Courier New', Courier, monospace href=timings.php?a=".$c2['docid']."><h3>Appointment</h3></a></th>";
echo "</tr>";

}

?>


<?php
$a=$_SESSION['id'];
$ad=1;
$r=mysqli_query($con,"select * from book where id='$a'");
echo "<table width=100% style=margin-top:50px>
		<tr><th colspan=2 style=color:#993399;font-family:'Courier New', Courier, monospace;><h1 align=left><u>Appointment Information</u></h1></th></tr>";
while($s=mysqli_fetch_array($r))
{
echo"<tr><th colspan=2 align=left style=color:green;font-family:gabriola;font-size:24px>Appointment :- ".$ad."";
	 if($s['report']!="Not_Report")
	 {
	 echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='download.php?id=".$s['report']."' style=text-decoration:none;color:red;font-family:gabriola;font-size:24px>(Show Report)</a></th></tr>";
	 }
	 else
	 {
	 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style=color:red;font-family:gabriola;font-size:24px>(No Report)</font>";
	 }
	 echo "</th></tr>";
echo "<tr><th width=35% height=50 align=left style=color:brown;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Doctor ID</th><th align=left style=color:blue;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$s['docid']."</th></tr>
	  <tr><th width=35% height=50 align=left style=color:brown;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Doctor Name</th><th align=left style=color:blue;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$s['dname']."</th></tr>
	  <tr><th width=35% height=50 align=left style=color:brown;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Timings</th><th align=left style=color:blue;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$s['timings']."</th></tr>";
	$ad++;
}
echo "</table>";
echo "</th>";
echo "<table>";


?>
</div>
</body>
</html>
