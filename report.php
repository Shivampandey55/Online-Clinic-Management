<?php
session_start();
$a=$_FILES['report']['name'];
$b=$_FILES['report']['type'];
$c=$_FILES['report']['size'];
$d=$_FILES['report']['tmp_name'];
echo "<br />Name:-".$a;
echo "<br />Type:-".$b;
echo "<br />Size:-".$c;
echo "<br />Location:-".$d;
$pid=$_SESSION['pid'];
$did=$_SESSION['docid'];
$re=str_replace(" ","_",$a);
$re1=str_replace("'","_",$re);
move_uploaded_file($d,"images/".$re1);
include_once("connect.php");
mysqli_query($con,"update book set report='$re1' where docid='$did' and id='$pid'")or die(mysqli_error($con));

?>