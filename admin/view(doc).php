<form action="doc.php" method="post">
<?php
$a=$_REQUEST['a'];
$con=mysqli_connect("localhost","root","")or die(mysql_error());
mysqli_select_db($con,"online_clinic")or die(mysqli_error());
$r=mysqli_query($con,"select * from doctor_details where emailid='$a'");
if($s=mysqli_fetch_array($r))
{
	  $image=$s['image'];
	  echo "Doc Id:&nbsp;&nbsp;&nbsp;<input type=hidden name=t1 value=".$s['docid'].">".$s['docid'];
	  echo "<br />Doctor Name:&nbsp;&nbsp;&nbsp;<input type=hidden name=t2 value=".$s['doctorname'].">".$s['doctorname'];
	  echo "<br />Qualification:&nbsp;&nbsp;&nbsp;<input type=hidden name=t3 value=".$s['quali'].">".$s['quali'];
	  echo "<br />Specialist In:&nbsp;&nbsp;&nbsp;<input type=hidden name=t4 value=".$s['specialistin'].">".$s['specialistin'];
  	  echo "<br />Contact No:&nbsp;&nbsp;&nbsp;<input type=hidden name=t5 value=".$s['contactno'].">".$s['contactno'];
	  echo "<br />Email Id:&nbsp;&nbsp;&nbsp;<input type=hidden name=t6 value=".$s['emailid']." disabled=disabled>".$s['emailid'];
	  echo "<br />Biodata:&nbsp;&nbsp;&nbsp;<input type=hidden name=t7 value=".$s['biodata'].">".$s['biodata'];
	  echo "<br />Image:&nbsp;&nbsp;&nbsp;<img src=".$image." height=50px width=50px><br />";
}
?>
<input type="submit" value="Go Back" />
</form>