<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="lab">
<?php
include_once("connect.php");
$r=mysqli_query($con,"select * from lab_test");
?>
<table width="100%">
<tr>
<th width="50%" align="right" valign="top"><a href="logout(lab).php" style="font-size:20px;color:red;font-family:'Courier New', Courier, monospace;">Logout</a></th>
</tr>
</table>
<table align="center" width="700px" style="background:url(images/bg-body.jpg);border:red solid 2px">
<tr>
<th width="60px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Lab Id</th><th width="150px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Patient Name</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold;">Gender</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Address</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Mobile Number</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Email Id</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Timings</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Date of Appointment</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Test</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Generate Reports</th>
</tr>
<?php
while($s=mysqli_fetch_array($r))
{
echo "<tr><th>".$s['lab_id']."</th><th>".$s['fname']."</th><th>".$s['gender']."</th><th>".$s['address']."</th><th>".$s['mno']."</th><th>".$s['eid']."</th><th>".$s['timings']."</th><th>".$s['doa']."</th><th>".$s['test']."</th><th><a href=upload(lab).php?a5=".$s['lab_id']." style=color:#996699;font-size:20px;font-family:Script MT Bold;>Upload</a></th></tr>";
}
?>
</table>
</div>
</body>
</html>