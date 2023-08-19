<form action="pat.php" method="post">
<?php
$a=$_REQUEST['a'];
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("online_clinic")or die(mysql_error());
$r=mysql_query("select * from lab_test where fname='$a'");
if($s=mysql_fetch_array($r))
{
	  echo "Lab Id:&nbsp;&nbsp;&nbsp;<input type=hidden name=t1 value=".$s['lab_id']." disabled=disabled>".$s['lab_id'];
	  echo "<br />Patient Name:&nbsp;&nbsp;&nbsp;<input type=hidden name=t2 value=".$s['fname'].">".$s['fname'];
	  echo "<br />Gender:&nbsp;&nbsp;&nbsp;<input type=hidden name=t3 value=".$s['gender'].">".$s['gender'];
	  echo "<br />Address:&nbsp;&nbsp;&nbsp;<input type=hidden name=t4 value=".$s['address'].">".$s['address'];
  	  echo "<br />Mobile No:&nbsp;&nbsp;&nbsp;<input type=hidden name=t5 value=".$s['mno'].">".$s['mno'];
	  echo "<br />Email Id:&nbsp;&nbsp;&nbsp;<input type=hidden name=t6 value=".$s['eid']." disabled=disabled>".$s['eid'];
	  echo "<br />Timings:&nbsp;&nbsp;&nbsp;<input type=hidden name=t7 value=".$s['timings']." disabled=disabled>".$s['timings'];
	  echo "<br />Date of Appointment:&nbsp;&nbsp;&nbsp;<input type=hidden name=t7 value=".$s['doa']." disabled=disabled>".$s['doa'];
	  echo "<br />Test:&nbsp;&nbsp;&nbsp;<input type=hidden name=t7 value=".$s['test']." disabled=disabled>".$s['test']."<br />";
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