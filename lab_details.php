<html>
<head>
<title></title>
</head>
<body bgcolor="#CC99CC" style="background:url(images/background.jpg) no-repeat center">

<table width="100%" align="right">
<tr><th width="50%" align="left" valign="top"><a href="user.php" style="font-size:20px;color:green;font-family:'Courier New', Courier, monospace;">Back</a></th><th width="50%" align="right" valign="top"><a href="logout.php" style="font-size:20px;color:green;font-family:'Courier New', Courier, monospace;">Logout</a></th></tr>
</table>
<?php
session_start();
if(!(isset($_SESSION['id'])))
{
	header("location:login.php");
}
$a=$_SESSION['id'];

include_once("connect.php");
$t=mysqli_query($con,"select * from appointment where id='$a'")or die(mysqli_error($con));
	if($u=mysqli_fetch_array($t))
	{
	$email=$u['eid'];
	}
$c=mysqli_query($con,"select * from lab_test where eid='$email'");
?>
<div class="lab_details">
<table width="1000px" align="center" style="border:red solid 3px;border-radius:25px;border-right:red solid 3px">
<tr>
	  <th width="90px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold;border-right:red solid 3px">First Name</th>
	  <th width="80px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold;border-right:red solid 3px">Gender</th>
	  <th width="150px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold;border-right:red solid 3px">Address</th>
	  <th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold;border-right:red solid 3px">Mobile No.</th>
	  <th width="100px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold;border-right:red solid 3px">Email ID</th>
	  <th width="100px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold;border-right:red solid 3px">Timings</th>
	  <th width="80px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold;border-right:red solid 3px">Test</th>
  	  <th width="150px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold;border-right:red solid 3px">Date of appointment</th>
  	  <th width="150px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold;">Reports</th>

</tr>
<?php
/*  
echo "<table border=2 height=300 width=300>
	  <tr>
	  <th>First Name</th>
	  <th>Gender</th>
	  <th>Address</th>
	  <th>Mobile No.</th>
	  <th>Email ID</th>
	  <th>Timings</th>
	  <th>Test</th>
  	  <th>Date of appointment</th>
	  </tr>";
*/
?>
<?php 
while($r1 = mysqli_fetch_array($c))
	{
?>
	<tr>
	<th height="50" style="color:green;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;border-right:red solid 3px"><?php echo $r1['fname']; ?></th>
	<th height="50" style="color:green;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;border-right:red solid 3px"><?php echo $r1['gender']; ?> </th>
	<th height="50" style="color:green;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;border-right:red solid 3px"><?php echo $r1['address']; ?></th>
	<th height="50" style="color:green;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;border-right:red solid 3px"><?php echo $r1['mno']; ?></th>
	<th height="50" style="color:green;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;border-right:red solid 3px"><?php echo $r1['eid']; ?></th>
	<th height="50" style="color:green;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;border-right:red solid 3px"><?php echo $r1['timings']; ?></th>
	<th height="50" style="color:green;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;border-right:red solid 3px"><?php echo $r1['test']; ?></th>
	<th height="50" style="color:green;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;border-right:red solid 3px"><?php echo $r1['doa']; ?></th>
	<?php
	if($r1['report']!="Not_Report")
	 {
	 echo"<th><a href='download.php?id=".$r1['report']."' style=text-decoration:none;color:red;font-family:gabriola;font-size:24px>(Show Report)</a></th>";
	 }
	 else
	 {
	 echo "<th><font style=color:red;font-family:gabriola;font-size:24px>(No Report)</font></th>";
	 }
	?>
	</tr>
<?php
}
?>
</table>
</div>
</body>
</html>