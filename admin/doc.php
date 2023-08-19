<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="options">
<table width="100%" style="background:url(images/bg-header.jpg)" height="0px">
<tr>
<th><a href="doc.php" class="current">Doctors in Clinic</a></th>
<th><a href="pat.php">List of Patients</a></th>
<th><a href="feed.php">Feedback given to Clinic</a></th>
<th><a href="logout(admin).php">Logout</a></th>
</tr>
</table>
</div>
<div class="tabledoc">
<?php
$con=mysqli_connect("localhost","root","","online_clinic")or die(mysql_error());
$r=mysqli_query($con,"select * from doctor_details order by docid");
?>
<table width="100%">
<tr>
<th width="60px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Doc Id</th><th width="150px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Doctor Name</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold;">Qualification</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Specialist In</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Contact No.</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Email Id</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Biodata</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Image</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Action</th>
</tr>
<?php
while($s=mysqli_fetch_array($r))
{
$image=$s['image'];
echo "<tr><th>".$s['docid']."</th><th>".$s['doctorname']."</th><th>".$s['quali']."</th><th>".$s['specialistin']."</th><th>".$s['contactno']."</th><th>".$s['emailid']."</th><th>".$s['biodata']."</th><th><img src=".$image." height=50px width=50px></th><th><a href=edit(doc).php?a=".$s['emailid'].">Edit</a>/<a href=view(doc).php?a=".$s['emailid'].">View</a>/<a href=delete(doc).php?a=".$s['emailid'].">Delete</a></th></tr>";
}
?>
</table>
</div>
</body>
</html>