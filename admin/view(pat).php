<form action="pat.php" method="post">
<?php
$a=$_REQUEST['a'];
$con=mysqli_connect("localhost","root","")or die(mysql_error());
mysqli_select_db($con,"online_clinic")or die(mysql_error());
$r=mysqli_query($con,"select * from book where id='$a'");
if($s=mysqli_fetch_array($r))
{
	  echo "Patient Id:&nbsp;&nbsp;&nbsp;<input type=hidden name=t1 value=".$s['id']." disabled=disabled>".$s['id'];
	  echo "<br />Patient Name:&nbsp;&nbsp;&nbsp;<input type=hidden name=t2 value=".$s['fname'].">".$s['fname'];
	  echo "<br />Timings:&nbsp;&nbsp;&nbsp;<input type=hidden name=t3 value=".$s['timings'].">".$s['timings'];
	  echo "<br />Doctor Name:&nbsp;&nbsp;&nbsp;<input type=hidden name=t4 value=".$s['dname'].">".$s['dname'];
  	  echo "<br />Doctor Department:&nbsp;&nbsp;&nbsp;<input type=hidden name=t5 value=".$s['dd'].">".$s['dd'];
	  echo "<br />Doctor Id:&nbsp;&nbsp;&nbsp;<input type=hidden name=t6 value=".$s['docid']." disabled=disabled>".$s['docid'];
	  echo "<br />Report:&nbsp;&nbsp;&nbsp;<input type=hidden name=t7 value=".$s['report']." disabled=disabled>";
	 if($s['report']!="Not_Report")
	 {
	 echo"<a href='download.php?id=".$s['report']."' style=text-decoration:none;color:green;font-size:20px;font-family:Script MT Bold>Report generated</a>";
	 }
	 else
	 {
	 echo "<font style=color:green;font-size:20px;font-family:Script MT Bold>No Report</font>";
	 }
	  echo "<br />";
}
?>
<input type="submit" value="Go Back" />
</form>