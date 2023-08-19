
<?php
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$e=$_POST['t5'];
$f=$_POST['t6'];
$g=$_POST['t7'];
$h=$_POST['t8'];
mysqli_connect("localhost","root","","online_clinic") or die(mysql_error());
mysqli_select_db($con,"online_clinic") or die(mysql_error());
echo"<br/>Doc ID=".$a;
echo"<br/>Doctor Name=".$b;
echo"<br/>Qualification=".$c;
echo"<br/>Specialist In=".$d;
echo"<br/>Contact No=".$e;
echo"<br/>Email ID=".$f;
echo"<br/>Biodata=".$g;
echo"<br/>Image=".$h;
mysql_query("update doctor_details set docid='$a',doctorname='$b',quali='$c',specialistin='$d',contactno='$e',emailid='$f',biodata='$g',image='$h' where emailid='$f'")or die(mysql_error());
echo "<br /> data is inserted";
echo "<br /><a href=doc.php>show data</a>";
?>
