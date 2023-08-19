<?php
$a=$_POST['docid'];
$b=$_POST['doctorname'];
$c=$_POST['quali'];
$d=$_POST['specialistin'];
$e=$_POST['contactno'];
$f=$_POST['emailid'];
$g=$_POST['biodata'];
$h=$_POST['password'];
$i=$_FILES['image']['name'];
$j=$_FILES['image']['type'];
$k=$_FILES['image']['size'];
$l=$_FILES['image']['tmp_name'];
move_uploaded_file($l,"images/".$i);
$ii="images/".$i;

include_once("connect.php");
$t=mysqli_query($con,"select * from doctor_details where emailid='$f'");
if($u=mysqli_fetch_array($t))
{
	echo "<script>alert('this email already exist')</script>";
	include("doctor(sign up).php");
}
else
{
mysqli_query($con,"insert into doctor_details values('$a','$b','$c','$d','$e','$f','$g','$h','$ii')")
or die(mysqli_error($con));
header("location:doctor_id.php");
}
?>
