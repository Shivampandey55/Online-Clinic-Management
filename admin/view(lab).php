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
<div class="tablelab">
<?php
$a=$_REQUEST['a'];
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("online_clinic")or die(mysql_error());
$r=mysql_query("select * from lab_test where fname='$a'");
?>
<table width="100%">
<tr>
<th width="80px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Lab Id</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Patient Name</th><th width="100px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold;">Gender</th><th width="100px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Address</th><th width="140px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Mobile No.</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Email Id</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Timings</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Date of Appointment</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Test</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Reports</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Action</th>
</tr>
<?php
while($s=mysql_fetch_array($r))
{
echo "<tr><th>".$s['lab_id']."</th><th>".$s['fname']."</th><th>".$s['gender']."</th><th>".$s['address']."</th><th>".$s['mno']."</th><th>".$s['eid']."</th><th>".$s['timings']."</th><th>".$s['doa']."</th><th>".$s['test']."</th>";
echo "<th>";
	if($s['report']!="Not_Report")
	 {
	 echo"<a href='download.php?id=".$s['report']."' style=color:green;font-size:20px;font-family:Script MT Bold;text-decoration:none>Report Generated</a>";
	 }
	 else
	 {
	 echo "<font style=color:green;font-size:20px;font-family:Script MT Bold>No Report</font>";
	 }
echo "</th>";

echo "<th><a href=view(lab1).php?a=".$s['fname'].">View</a>/<a href=delete(lab1).php?a=".$s['fname'].">Delete</a></th></tr>";
}
?>
</table>
</div>
</body>
</html>