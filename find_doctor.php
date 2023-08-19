<?php 
include("header.php");
?>
<div class="find_a_doctor">

  <table width="500px" align="center" cellspacing="20px">
    <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method="post" name="newdoc" enctype="multipart/form-data">
      <tr>
        <th align="left" colspan="2" style="background:#CC9999;color:#99FFFF;font-family:Brush Script MT;font-size:35px;height:60px;border-radius:20px"><marquee behavior="alternate">
Find a Doctor
          </marquee></th>
      </tr>
	  <script>
	  $(document).ready(function(){
	    $('#bynam').click(function(){
		$('#bynm').show()
		$('#byspc').hide()

				});
	 });
	  
	  	  $(document).ready(function(){
	    $('#byspec').click(function(){
		$('#byspc').show()
		$('#bynm').hide()
		
				});
	 });
	  </script>
	  <style>
	  #byspc ,#bynm
	  {
	  display:none;
	  }
	  
	  
	  </style>
            <tr>
          <th align="left" width="200px" style="margin-left:10px;"><input type="radio"  name="find" value="By Name" id="bynam">By Name</th>
		  <?php
		 
include_once("connect.php");
			$c1=mysqli_query($con,"select * from doctor_details");
			?>
			<th align="center" width="300px" rowspan="2">
			<select name="doctorname" id="bynm">
			<option value="">Doctor Name</option>
			<?php
			while($r2=mysqli_fetch_array($c1))
			{
			echo"<option value=".$r2['docid'].">".$r2['doctorname']."</option>";
		    }
			echo"</select>";
		  ?>
		  <select  id="byspc" name="specialistin">
		  <option value="">specialistin</option>
		  <option value="E.N.T">ENT</option>
 	      <option value="Neurologist">Neurologist</option>
  		  <option value="Orthology">Orthologist</option>
		  <option value="Gynaecologist">Gynaecologist</option>
		  <option value="Pedeatrics">Pedeatrics</option>
		  <option value="Eye specialist">Eye specialist</option>
		  <option value="Dentistry">Dentistry</option>
		  </select></th>
		  </tr>
		  <tr>
          <th rowspan="1" align="left"><input type="radio" id="byspec" name="find" value="By Speciality">By Speciality</th>
	       </tr>
		<tr>
          <th colspan="2" align="center"><input type="submit" value="Find" style="height:40px;width:60px;background:#F08080;color:white;font-size:20px;font-weight:bold;font-family:				Gabriola" /></th>
        </tr>
    </form>
  </table>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
			
			$doctorname=$_POST['doctorname'];
			$specialistin=$_POST['specialistin'];
			
include_once("connect.php");
			$c=mysqli_query($con,"select * from doctor_details where docid='$doctorname' || specialistin='$specialistin'");
			echo "<table width=1000px align=center>";
			while($d=mysqli_fetch_array($c))
			{
				$image=$d['image'];
				echo "<tr><th colspan=7><img src=".$image."  height=200 width=160 border=5px style=border-radius:30px;border-color:red /></th>";
				echo "<th align=left height=300><font style=color:orange;font-family:chiller;font-size:20px>DOCID:</font>&nbsp;&nbsp;<font style=color:green;font-family:gabriola;font-size:20px>".$d['docid']."</font><br /><br />";
				$doctorname=$d['doctorname'];
				echo "<font style=color:orange;font-family:chiller;font-size:20px >DOCTORNAME:</font>&nbsp;&nbsp;<font style=color:green;font-family:gabriola;font-size:20px>".$doctorname."</font>";
				echo "<br /><br />";
				echo "<font style=color:orange;font-family:chiller;font-size:20px >QUALIFICATION:</font>&nbsp;&nbsp;<font style=color:green;font-family:gabriola;font-size:20px>".$d['quali']."</font>";
				echo "<br /><br />";
				echo "<font style=color:orange;font-family:chiller;font-size:20px >EMAIL-ID:</font>&nbsp;&nbsp;<font style=color:green;font-family:gabriola;font-size:20px>".$d['emailid']."</font>";
				echo "<br /><br />";
				echo "<font style=color:orange;font-family:chiller;font-size:20px >CONTACT NO.:</font>&nbsp;&nbsp;<font style=color:green;font-family:gabriola;font-size:20px>".$d['contactno']."</font>";
				echo "<br /><br />";
				echo "<font style=color:orange;font-family:chiller;font-size:20px >BIODATA:</font>&nbsp;&nbsp;<font style=color:green;font-family:gabriola;font-size:20px>".$d['biodata']."</font>";
				echo "<br /><br />";
				$specialistin=$d['specialistin'];
				echo "<font style=color:orange;font-family:chiller;font-size:20px >SPECIALISTIN:</font>&nbsp;&nbsp;<font style=color:green;font-family:gabriola;font-size:20px>".$specialistin."</font>";
				echo "</th></tr>";
				
			}
			
			echo "</table>";
}
?>
</div>
<?php 
include("footer.php");
?>
