<?php
include('header.php');
?>



	<form method="post" action="changepass(doctor).php">
      <table width="600" cellspacing="20px" align="center" style="margin-top:50px;margin-bottom:50px">
              
        
        <tr>
          <td  width="300px" align="right" style="font-family:'Courier New', Courier, monospace;font-size:18px;font-weight:bold;color:#006699">Enter Doctor ID : </td>
          <td width="300px"><input type="text" name="docid" size="25px" /></td>
        </tr>
        <tr>
          <td width="300px" align="right" style="font-family:'Courier New', Courier, monospace;font-size:18px;font-weight:bold;color:#006699">Enter Old Password: </td>
          <td width="300px"><label>
            <input type="password" name="oldpass" size="25px" />
          </label></td>
        </tr>
        <tr>
          <td width="300px" align="right" style="font-family:'Courier New', Courier, monospace;font-size:18px;font-weight:bold;color:#006699">Enter New password: </td>
          <td width="300px"><input type="password" name="newpass" size="25px" /></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
            <input type="submit" name="Submit" value="Submit"  style="height:45px;width:70px;background:#003366;color:#CCCCCC;cursor:pointer" />
          </div></td>
        </tr>
        
      </table>
	</form>
   
<?php
include('footer.php');
?>

