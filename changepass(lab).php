<?php
include('header.php');
?>

	
      <table width="400px" align="center" style="margin-top:85px;margin-bottom:85px">
        <tr>
          <th colspan="2">
		  <?php
		  $username=$_REQUEST['username'];
		  $password=$_REQUEST['oldpass'];
		  $npassword=$_REQUEST['newpass'];
		  
include_once("connect.php");
		  $result=mysqli_query($con,"select *from lab where username='$username' and password='$password' ")
		  or die(mysqli_error($con));
		  $query=mysqli_query($con,"update lab set password='$npassword' where username='$username' " )
		  or die(mysqli_error($con));
          ?>
		  </th>
          </tr>
          <tr>
          <th colspan="2"><div align="center" class="style2"><strong><font color="#CC0066" size="+3">Congratulations ! <br />
          Your Password Has Been <font color="#3333FF">Changed ! </font></font></strong></div></td>
          </tr>
          <tr><th><form action="lab.php" method="post"><input type="submit" value="Click here for login" /></form></th></tr>
      </table>
<?php
include('footer.php');
?>

