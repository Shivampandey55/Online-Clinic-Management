<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="options">
<table width="100%" style="background:url(images/bg-header.jpg)" height="60px">
<tr>
<th><a href="doc.php">Doctors in Clinic</a></th>
<th><a href="pat.php" class="current">List of Patients</a></th>
<th><a href="feed.php">Feedback given to Clinic</a></th>
<th><a href="logout(admin).php">Logout</a></th>
</tr>
</table>
</div>
<div class="tablepat">
<?php
$con=mysqli_connect("localhost","root","","online_clinic")or die(mysql_error());
$r=mysqli_query($con,"select * from book order by id");
?>
<table width="100%">
<tr>
<th width="80px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Patient Id</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Patient Name</th><th width="100px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold;">Timings of Appointment</th><th width="100px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Doctor Name</th><th width="140px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Doctor Department</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Doctor Id</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Report</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Lab Test</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Action</th>
</tr>
<?php
while($s=mysqli_fetch_array($r))
{
echo "<tr><th>".$s['id']."</th><th>".$s['fname']."</th><th>".$s['timings']."</th><th>".$s['dname']."</th><th>".$s['dd']."</th><th>".$s['docid']."</th>";
echo "<th>";
if($s['report']!="Not_Report")
	 {
	 echo"<a href='download.php?id=".$s['report']."' style=text-decoration:none;color:green;font-size:20px;font-family:Script MT Bold>Report generated</a>";
	 }
	 else
	 {
	 echo "<font style=color:green;font-size:20px;font-family:Script MT Bold>No Report</font>";
	 }
echo "</th>";
echo "<th><a href=view(lab).php?a=".$s['fname'].">View</a></th>";
echo "<th><a href=view(pat).php?a=".$s['id'].">View</a>/<a href=delete(pat).php?a=".$s['id'].">Delete</a></th></tr>";
}
?>
</table>
</div>
</body>
</html>