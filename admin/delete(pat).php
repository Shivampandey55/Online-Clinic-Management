<?php
$a=$_REQUEST['a'];
mysql_connect("localhost","root","");
mysql_select_db("online_clinic");
mysql_query("delete from book where id='$a'");
echo"data is deleted";
header("location:pat.php");
?>