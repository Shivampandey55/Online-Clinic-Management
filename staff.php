<?php
include("header.php");
?>
<html>
<head>
<title></title>
<script src="js/jquery.js"></script>
<script type="text/javascript">
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  a=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  a=new ActiveXObject("Microsoft.XMLHTTP");
  }
a.onreadystatechange=function()
  {
  if (a.readyState==4 && a.status==200)
    {
    document.getElementById("txtHint").innerHTML=a.responseText;
    }
  }
a.open("GET","kamal1.php?q="+str,true);
a.send();
}
</script>
</head>
<body>
<div id="staff">
<table width="1000px" align="center" cellpadding="30px">
<tr>
<th style="font-family:Chiller;font-size:50px;color:#191970;" align="left" colspan="2">Doctors and Medical Staff</th>
</tr>
<tr><th align="left" colspan="2"><form action="" method="" name="staff">
<input type="text" name="search" placeholder="Search Doctors and Medical Staff" size="50" onkeyup="showUser(this.value)" />
</form>
<span id="txtHint"></span>
</th></tr>
</table>
<table width="1000px" align="center" cellspacing="30px" style="margin-bottom:30px">
<tr><th>
<?php
include_once("connect.php");
$c=mysqli_query($con,"select * from doctor_details order by doctorname");
echo "<table width=700><tr><th width=350 align=left style=color:#2E8B57;font-size:35px;font-family:Chiller;>Name</th>
	  <th width=350 align=left style=color:#2E8B57;font-size:35px;font-family:Chiller;>Department</th>
	  </tr>";
while($d=mysqli_fetch_array($c))
{
	echo "<tr><th width=350 align=left><a style=text-decoration:none;color:#B22222;font-size:20px;font-family:Gabriola; href=staff_details.php?a=".$d['docid'].">".$d['doctorname']."</a></th><th width=350 align=left style=color:#B22222;font-size:20px;font-family:Gabriola;>".$d['specialistin']."</th></tr>";
}	
echo "</table>";
?>
</th></tr>
</table>
</div>
</body>
</html>
<?php
include("footer.php");
?>