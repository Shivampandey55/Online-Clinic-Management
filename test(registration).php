<?php
session_start();
$test=$_SESSION['test'];
	include_once("connect.php");
$h=$_POST['timings'];
$q=mysqli_query($con,"select * from lab_test where timings='$h' and test='$test'");
if($dd=mysqli_fetch_array($q))
{
echo "<script>alert(This timings are already booked)</script>";
header("location:timings(test)1.php?a=".$h);
}
else
{
$_SESSION['tym']=$h;

header("location:lab(registration).php");	
	}
?>
