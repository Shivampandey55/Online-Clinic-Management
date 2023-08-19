<html>
<head></head>
<body style="background:url(images/bg-content.jpg)">
<table width="100%">
<tr><th width="50%" align="right" valign="top"><a href="logout(lab).php" style="font-size:20px;color:red;font-family:'Courier New', Courier, monospace;">Logout</a></th>
</tr>
</table>
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
$did=$_SESSION['username'];
$re=str_replace(" ","_",$a);
$re1=str_replace("'","_",$re);
move_uploaded_file($d,"images/".$re1);
include_once("connect.php");
mysqli_query($con,"update lab_test set report='$re1' where lab_id='$pid'")or die(mysqli_error($con));

?>
</body>
</html>