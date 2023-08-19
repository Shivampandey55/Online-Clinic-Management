<?php
$a=$_REQUEST['a'];
mysql_connect("localhost","root","");
mysql_select_db("online_clinic");
mysql_query("delete from doctor_details where emailid='$a'");
echo"data is deleted";
header("location:doc.php");
?>