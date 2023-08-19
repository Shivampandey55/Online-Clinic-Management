<?php
include("header.php");
?>
<html>
<head>
<title></title>
</head>
<body>
<div class="staff_details">
<table width="1000px" align="center"  style="margin-top:30px;margin-bottom:30px;color:#00FF66;font-weight:bolder">
  <tr>
    <th width="100%"> <?php
$a=$_REQUEST['a'];
include_once("connect.php");
$r=mysqli_query($con,"select * from doctor_details where docid='$a'");
echo "<table width=400px align=center>";
if($s=mysqli_fetch_array($r))
{
$image = $s['image'];
echo "<tr><th height=250 align=center><img src=".$image."  height=180 width=150 border=5px style=border-radius:20px;border-color:green /></th></tr>";
echo "<tr><th height=50 align=center style=color:#993399;font-size:25px;font-family:Gabriola;font-style:italic>".$s['doctorname']."</th></tr>";
}
echo "</table>";
?>
    </th>
  <th width="100%">  <?php
$a=$_REQUEST['a'];
include_once("connect.php");
$r=mysqli_query($con,"select * from doctor_details where docid='$a'");
echo "<table width=600px align=center>";
if($s=mysqli_fetch_array($r))
{
echo "<tr><th height=50 style=color:#CC6633;font-size:24px;font-family:Chiller;>Doctor ID:</th><th align=left style=color:#00FF66;font-size:22px;font-family:Gabriola;font-style:italic>".$s['docid']."</th></tr>";
echo "<tr><th height=50 style=color:#CC6633;font-size:24px;font-family:Chiller;>Qualification:</th><th align=left style=color:#00FF66;font-size:22px;font-family:Gabriola;font-style:italic>".$s['quali']."</th></tr>";
echo "<tr><th height=50 style=color:#CC6633;font-size:24px;font-family:Chiller;>Specialist In:</th><th align=left style=color:#00FF66;font-size:22px;font-family:Gabriola;font-style:italic>".$s['specialistin']."</th></tr>";
echo "<tr><th height=50 style=color:#CC6633;font-size:24px;font-family:Chiller;>Contact Number:</th><th align=left style=color:#00FF66;font-size:22px;font-family:Gabriola;font-style:italic>".$s['contactno']."</th></tr>";
echo "<tr><th height=50 style=color:#CC6633;font-size:24px;font-family:Chiller;>Biodata:</th><th align=left style=color:#00FF66;font-size:22px;font-family:Gabriola;font-style:italic;>".$s['biodata']."</th></tr>";

}
echo "</table>";
?>
  </th> 
  </tr>
</table>
</div>
</body>
</html>
<?php
include("footer.php");
?>
