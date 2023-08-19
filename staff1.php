<?php
	$q=$_GET['q'];include_once("connect.php");
$sql=mysqli_query($con,"select * from doctor_details where doctorname = '$q'");

while($s=mysqli_fetch_array($sql))
{
echo $s['doctorname'].",";
}

?>