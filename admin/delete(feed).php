<?php
$a=$_REQUEST['a'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "online_clinic");
$r=mysqli_query($con, "delete from feedback where eid='$a'");
echo"data is deleted";
header("location:feed.php");
?>