<?php
include('../header.php');
?>
<h1 style="color:#6699CC;font-weight:bold;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;margin-top:50px" align="center">Diplay Admin Password:</h1>
<?php
$uname=$_REQUEST['uname'];
mysql_connect("localhost","root","");
mysql_select_db("online_clinic");		  
$a="select * from admin where uname='$uname'";
$result=mysql_query($a);
?>
	<table width="500px" align="center" style="background:url(images/Client-Login_bg.gif);height:220px;width:550px;margin-bottom:50px;border:#999999 solid 1px;">
	<tr>
	<?php	
	while($row=mysql_fetch_array($result))
	{
	?>
	<th width="200px" align="right" style="font-size:16px;color:#666666;font-family:'Arial Narrow', Arial, Helvetica, sans-serif">Username:</th><th width="300px" align="left"><?php echo "<input type=text name=name disabled=disabled value=" . $row['uname'] . ">";?></th>
	</tr>
	<tr>
	<th width="200px" align="right" valign="top" style="font-size:16px;color:#666666;font-family:'Arial Narrow', Arial, Helvetica, sans-serif">Password:</th><th width="300px" align="left" valign="top"><?php echo "<input type=text name=name disabled=disabled value=" . $row['password'] . ">";?></th>
	</tr>
	<tr><th colspan="2"><form method="post" action="admin.php"><input type="submit" value="Click here to login" /></form></th></tr>
	</table>
	<?php
	}
	?>
<?php
include('../footer.php');
?>

