<form action="feed.php" method="post">
<?php
$a=$_REQUEST['a'];
$con=mysqli_connect("localhost","root","")or die(mysql_error());
mysqli_select_db($con,"online_clinic")or die(mysql_error());
$r=mysqli_query($con,"select * from feedback where eid='$a'");
if($s=mysqli_fetch_array($r))
{
	  echo "Name:&nbsp;&nbsp;&nbsp;<input type=hidden name=t1 value=".$s['fname'].">".$s['fname'];
	  echo "<br />Date of Visit:&nbsp;&nbsp;&nbsp;<input type=hidden name=t2 value=".$s['dov'].">".$s['dov'];
	  echo "<br />Address:&nbsp;&nbsp;&nbsp;<input type=hidden name=t3 value=".$s['address'].">".$s['address'];
	  echo "<br />Mobile Number:&nbsp;&nbsp;&nbsp;<input type=hidden name=t4 value=".$s['mno'].">".$s['mno'];
  	  echo "<br />Email ID:&nbsp;&nbsp;&nbsp;<input type=hidden name=t5 value=".$s['eid']." disabled=disabled>".$s['eid'];
	  echo "<br />Comments:&nbsp;&nbsp;&nbsp;<input type=hidden name=t6 value=".$s['comments'].">".$s['comments']."<br />";
}
?>
<input type="submit" value="Go Back" />
</form>