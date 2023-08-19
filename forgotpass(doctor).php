<?php
include('header.php');
?>
<h1 style="color:#6699CC;font-weight:bold;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;margin-top:50px" align="center">Diplay Doctor Password:</h1>
<?php
$name=$_REQUEST['docid'];
include_once("connect.php");		  
$a="select * from doctor_details where docid='$name'";
$result=mysqli_query($con,$a);
?>
	<table width="500px" align="center" style="background:url(images/Client-Login_bg.gif);height:220px;width:550px;margin-bottom:50px;border:#999999 solid 1px;">
	<tr>
	<?php	
	while($row=mysqli_fetch_array($result))
	{
	?>
	<th width="200px" align="right" style="font-size:16px;color:#666666;font-family:'Arial Narrow', Arial, Helvetica, sans-serif">Doctor ID:</th><th width="300px" align="left"><?php echo "<input type=text name=name disabled=disabled value=" . $row['docid'] . ">";?></th>
	</tr>
	<tr>
	<th width="200px" align="right" valign="top" style="font-size:16px;color:#666666;font-family:'Arial Narrow', Arial, Helvetica, sans-serif">Password:</th><th width="300px" align="left" valign="top"><?php echo "<input type=text name=name disabled=disabled value=" . $row['password'] . ">";?></th>
	</tr>
	<tr><th colspan="2"><form method="post" action="doc_login.php"><input type="submit" value="Click here to login" /></form></th></tr>
	</table>
	<?php
	}
	?>
<?php
include('footer.php');
?>

