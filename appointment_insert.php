<?php
$a=$_POST['id'];
$b=$_POST['title'];
$c=$_POST['fname'];
$d=$_POST['lname'];
$e=$_POST['gender'];
$f=$_POST['status'];
$g=$_POST['date'];
$h=$_POST['address'];
$i=$_POST['mno'];
$j=$_POST['eid'];
$k=$_POST['password'];
$l=$_POST['reason'];
$m=$_POST['date1'];
$n=$_POST['department'];
include_once("connect.php");
$t=mysqli_query($con,"select * from appointment where eid='$j'");
if($u=mysqli_fetch_array($t))
{
	echo "<script>alert('this email already exist')</script>";
	include("appointment.php");
}
else
{
mysqli_query($con,"insert into appointment values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n')")or die(mysqli_error($con));
header("location:patient_id.php");
}
?>