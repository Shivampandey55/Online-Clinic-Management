<?php 
include("header.php");
?>
<div class="doctor_signup">
<table width="500px" align="center">
<form action="doctor_insert.php" method="post" name="newdoc" enctype="multipart/form-data">
<tr>
<th align="left" colspan="2" style="background:#6699CC;color:#FFFFFF;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;font-size:24px">Doctor Login</th>
	</tr>
	<tr>
	<th width="200px" align="right">Name:</th><th width="300px" align="left"><input type="text" name="doctorname" size="30" /></th>
	</tr>
	<tr>
	<th width="200px" align="right">Qualification:</th><th width="300px" align="left"><input type="text" name="quali" size="30" /></th>
	</tr>
	<tr>
	<th width="200px" align="right">Specialist in:</th><th width="300px" align="left"><input type="text" name="specialistin" size="30" /></th>
	</tr>
	<tr>
	<th width="200px" align="right">Contact No:</th><th width="300px" align="left"><input type="text" name="contactno" size="30" /></th>
	</tr>
	<tr>
	<th width="200px" align="right">Email-ID:</th><th width="300px" align="left"><input type="text" name="emailid" size="30" /></th>
	</tr>
	<tr>
	<th width="200px" align="right">Biodata:</th><th width="300px" align="left"><textarea  name="biodata" maxlength="1000" cols="24" rows="6"></textarea></th>
	</tr>
	<tr>
	<th width="200px" align="right">Password:</th><th width="300px" align="left"><input type="password" name="password" size="30" /></th>
	</tr>
	<tr>
	<th width="200px" align="right">Image:</th><th width="300px" align="left"><input type="file" name="image" /></th>
	</tr>
	<tr>
	<th colspan="2"><input type="submit" value="submit" /></th>
	</tr>
</form>
</table>
</div>
<?php 
include("footer.php");
?>