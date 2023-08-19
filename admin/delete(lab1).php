<?php
$a=$_REQUEST['a'];
mysql_connect("localhost","root","");
mysql_select_db("online_clinic");
mysql_query("delete from lab_test where fname='$a'");
echo"data is deleted";
header("location:view(lab).php");
?>