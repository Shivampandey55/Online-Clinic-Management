<?php
include("header.php");
?>

<html>
<head>
<title></title>
<link href="style.css" type="text/css" rel="stylesheet" />
<script src="validation.js" language="javascript">
</script>
<style>
#n
{
	color:#FF3300;
	text-decoration:blink;
}
#mn
{
	color:#FF3300;
	text-decoration:blink;
}
#em
{
	color:#FF3300;
	text-decoration:blink;
}
</style>
</head>
<body>
<div class="content">
	<table width="1000px" align="center">
	<tr>
	<th>
	<div class="feedback">
	<img src="images/Feedback.jpg" />
		<form action="feedback_insert.php" name="feedback" onSubmit="return feed()" method="post">
		<table width="750px" align="center" style="margin-top:20px;border:solid 1px #666666;margin-bottom:20px;background-color:#CCCCCC"> 
		<tr><th align="left" width="35%">Name<font color="#FF3300">*</font></th><th align="left"><input type="text" name="fname">&nbsp;<span id="n"></span></th></tr>
		<tr><th align="left" width="35%">Date of Visit<font color="#FF3300">*</font></th><th align="left"><input type="date" name="dov">&nbsp;<span id="do"></span></th></tr>
		<tr><th align="left" width="35%">Address<font color="#FF3300">*</font></th><th align="left"><textarea  name="address" maxlength="1000" cols="17" rows="6"></textarea>&nbsp;<span id="ad"></span></th></tr>
		<tr><th align="left" width="35%">Mobile No<font color="#FF3300">*</font></th><th align="left"><input type="text" name="mno">&nbsp;<span id="mn"></span></th></tr>
		<tr><th align="left" width="35%">Email Id<font color="#FF3300">*</font></th><th align="left"><input type="text" name="eid">&nbsp;<span id="em"></span></th></tr>
		<tr><th colspan="2" align="left">Please share your feedback to help us serve you better<font color="#FF3300">*</font><br />
		<textarea  name="comments" maxlength="1000" cols="65" rows="6"></textarea>&nbsp;<span id="com"></span>
		</th></tr>
		<tr><th align="right"><input type="submit" name="submit" value="submit"></th><th align="left"><input type="button" value="reset" onClick="reset()" /></th></tr>
		</table>
		</form>
	</div>
	</th>
	</tr>
	</table>
</div>
</body>
</html>

<?php
include("footer.php");
?>