
<html>
<head>
<title></title>
</head>
<body bgcolor="#CC99CC" style="background:url(images/background1.jpg) no-repeat center;background-attachment:fixed">
<table width="800px" align="center" style="margin-top:50px;border:white solid 1px">
<tr><th width="100%" align="center" colspan="3" style="color:#FF3399;font-family:'Courier New', Courier, monospace;border-bottom:white solid 1px;"><h1>TIMINGS(
<?php
session_start();
$a=$_REQUEST['a'];
$_SESSION['test']=$a;
echo $a;
?> )</h1></th></tr>
<form action="test(registration).php" method="post" name="timings3">
<tr><th style="color:#993399;font-family:'Courier New', Courier, monospace;"><h3>Morning</h3></th><th style="color:#993399;font-family:'Courier New', Courier, monospace;"><h3>Afternoon</h3></th><th style="color:#993399;font-family:'Courier New', Courier, monospace;"><h3>Evening</h3></th></tr>
<tr>
<th>
<input type="radio" name="timings" value="10:00am-10:15am"><font color="green">10:00am-10:15am</font><br /><br />
<input type="radio" name="timings" value="10:15am-10:30am"><font color="green">10:15am-10:30am</font><br /><br />
<input type="radio" name="timings" value="10:30am-10:45am"><font color="green">10:30am-10:45am</font><br /><br />
<input type="radio" name="timings" value="10:45am-11:00am"><font color="green">10:45am-11:00am</font><br /><br />
<input type="radio" name="timings" value="11:00am-11:15am"><font color="green">11:00am-11:15am</font><br /><br />
<input type="radio" name="timings" value="11:15am-11:30am"><font color="green">11:15am-11:30am</font><br /><br />
<input type="radio" name="timings" value="11:30am-11:45am"><font color="green">11:30am-11:45am</font><br /><br />
<input type="radio" name="timings" value="11:45am-12:00am"><font color="green">11:45am-12:00am</font><br /><br />
<input type="radio" name="timings" value="12:00am-12:15pm"><font color="green">12:00am-12:15pm</font><br /><br />
<input type="radio" name="timings" value="12:15pm-12:30pm"><font color="green">12:15pm-12:30pm</font><br /><br />
<input type="radio" name="timings" value="12:30pm-12:45pm"><font color="green">12:30pm-12:45pm</font><br /><br />
<input type="radio" name="timings" value="12:45pm-01:00pm"><font color="green">12:45pm-01:00pm</font><br /><br />
</th>
<th valign="top">
<input type="radio" name="timings" value="04:00pm-04:15pm"><font color="green">04:00pm-04:15pm</font><br /><br />
<input type="radio" name="timings" value="04:15pm-04:30pm"><font color="green">04:15pm-04:30pm</font><br /><br />
<input type="radio" name="timings" value="04:30pm-04:45pm"><font color="green">04:30pm-04:45pm</font><br /><br />
<input type="radio" name="timings" value="04:45pm-05:00pm"><font color="green">04:45pm-05:00pm</font><br /><br />
<input type="radio" name="timings" value="05:00pm-05:15pm"><font color="green">05:00pm-05:15pm</font><br /><br />
<input type="radio" name="timings" value="05:15pm-05:30pm"><font color="green">05:15pm-05:30pm</font><br /><br />
<input type="radio" name="timings" value="05:30pm-05:45pm"><font color="green">05:30pm-05:45pm</font><br /><br />
<input type="radio" name="timings" value="05:45pm-06:00pm"><font color="green">05:45pm-06:00pm</font><br /><br />
</th>
<th valign="top">
<input type="radio" name="timings" value="07:00pm-07:15pm"><font color="green">07:00pm-07:15pm</font><br /><br />
<input type="radio" name="timings" value="07:15pm-07:30pm"><font color="green">07:15pm-07:30pm</font><br /><br />
<input type="radio" name="timings" value="07:30pm-07:45pm"><font color="green">07:30pm-07:45pm</font><br /><br />
<input type="radio" name="timings" value="07:45pm-08:00pm"><font color="green">07:45pm-08:00pm</font><br /><br />
<input type="radio" name="timings" value="08:00pm-08:15pm"><font color="green">08:00pm-08:15pm</font><br /><br />
<input type="radio" name="timings" value="08:15pm-08:45pm"><font color="green">08:15pm-08:45pm</font><br /><br />
<input type="radio" name="timings" value="08:45pm-09:00pm"><font color="green">08:45pm-09:00pm</font><br /><br />
</th>
</tr>
<tr><th colspan="3" align="center"><input type="submit" value="Book Timings" style="height:40px;margin-bottom:10px;color:#993399;background:pink;font-size:18px" /></th></tr>
</form>
</table>
</body>
</html>