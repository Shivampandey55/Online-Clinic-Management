<?php
$a=$_POST['fname'];
$b=$_POST['dov'];
$c=$_POST['address'];
$d=$_POST['mno'];
$e=$_POST['eid'];
$f=$_POST['comments'];

include_once("connect.php");
$r=mysqli_query($con,"select * from feedback where eid='$e'");
if($s=mysqli_fetch_array($r))
{
	echo "<script>alert('this email already exist')</script>";
	include("feedback.php");
}
else
{
mysqli_query($con,"insert into feedback values('$a','$b','$c','$d','$e','$f')")or die(mysqli_error($con));
header("location:index.php");
}
?>