<?php
include("header.php");
?>
<html>
<head>
<title></title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div class="patientid">
	<table width="700px" align="center" style="margin-top:60px">
	<tr>
    <th style="background:#6699CC;color:#FFFFFF;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;font-size:20px;font-weight: bold;text-align:center;">Doctor&nbsp;&nbsp; Registered&nbsp;&nbsp; Successfully</th>
    </tr>
    <tr>
    <th style="color:#666666;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;font-size:18px;font-weight: bold;text-align:left;"><b>
	<?php
	
include_once("connect.php");
	$y=mysqli_query($con,"select MAX(docid) from doctor_details");
	while($w=mysqli_fetch_array($y))
	{
	$maxdocid = $w[0];
	echo "Your Doctor ID is :".$maxdocid;
	$maxdocid++;
	}
	?>
	</b></th>
    </tr>
    </table>
	<table width="500px" align="center" style="margin-top:60px;margin-bottom:60px">
	<tr>
	<th><br /><br /></th>
	</tr>
	<tr>
	<th>
	<form method="post" action="doc_login.php" id="formID1" class="formular" >
    <input name="btnlogin" type="submit" id="submit" value="Click here to Login"  class="submit"/>
    </form>
	</th>
	</tr>
	<tr>
	<th><br /><br /></th>
	</tr>
	</table>
</div>
</body>
</html>
<?php
include("footer.php");
?>
 