<?php
include('header.php');
?>
	<form method="post" action="forgotpass(lab).php">
      <table width="600" cellspacing="50px" align="center" style="margin-top:50px;margin-bottom:50px">
               <tr>
          <td width="300px" align="right" style="font-family:'Courier New', Courier, monospace;font-size:18px;font-weight:bold;color:#006699">Enter Username: </td>
          <td width="300px"><label>
            <input type="text" name="username" size="25px" />
          </label></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
            <input type="submit" name="Submit" value="Submit" style="height:45px;width:70px;background:#003366;color:#CCCCCC;cursor:pointer" />
          </div></td>
        </tr>
          </table>
	</form>

<?php
include('footer.php');
?>