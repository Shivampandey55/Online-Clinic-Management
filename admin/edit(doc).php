<form action="edit(doc)1.php" method="post">
<?php
$a=$_REQUEST['a'];
$con=mysqli_connect("localhost","root","")or die(mysql_error());
mysqli_select_db($con,"online_clinic")or die(mysql_error());
$r=mysqli_query($con,"select * from doctor_details where emailid='$a'");
if($s=mysqli_fetch_array($r))
{
	  $image=$s['image'];
	  echo "Doc Id:<input type=hidden name=t1 value=".$s['docid'].">".$s['docid'];
	  echo "<br />Doctor Name:<input type=text name=t2 value=".$s['doctorname']."><br />
      Qualification:<input type=text name=t3 value=".$s['quali']."><br />
	  Specialist In:<input type=text name=t4 value=".$s['specialistin']."><br />
  	  Contact No:<input type=text name=t5 value=".$s['contactno']."><br />
	  Email Id:<input type=text name=t6 value=".$s['emailid']." disabled=disabled><input type=hidden name=t6 value=".$s['emailid']."><br />
	  Biodata:<input type=text name=t7 value=".$s['biodata']."><br />
	  Image:<img src=".$image."height=50px width=50px><br />";
}
?>
<input type="submit" value="Edit" />
</form>