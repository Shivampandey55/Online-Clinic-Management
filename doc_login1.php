			<?php
			session_start();
			$a=$_POST['docid'];
			$b=$_POST['password'];
			$dept=$_POST['dept'];
			
include_once("connect.php");
			$c=mysqli_query($con,"select * from doctor_details where docid='$a' && password='$b'");
			if($d=mysqli_fetch_array($c))
			{
				$_SESSION['docid']=$a;
				$_SESSION['$dept']=$_POST['dept'];
				header("location:doctor.php");
			}
			else
			{
				header("location:doc_login.php");
			}
			?>