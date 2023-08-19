<?php
	session_start();
	$a=$_SESSION['id'];
	$tym=$_SESSION['tym'];
	$test=$_SESSION['test'];
	$i=$_POST['doa'];
	include_once("connect.php");
	$t=mysqli_query($con,"select * from appointment where id='$a'");
	if($u=mysqli_fetch_array($t))
	{
	$fname=$u['fname'];
	$gender=$u['gender'];
	$address=$u['address'];
	$mno=$u['mno'];	
	$email=$u['eid'];
	}
	mysqli_query($con,"insert into lab_test values('','$fname','$gender','$address','$mno','$email',
	'$tym','$i','$test','Not_Report')")or die(mysqli_error($con));
	header("location:user.php");
	
?>