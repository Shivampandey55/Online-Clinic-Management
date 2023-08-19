			<?php
			session_start();
			$a=$_POST['username'];
			$b=$_POST['password'];
			include_once("connect.php");
			$c=mysqli_query($con,"select * from lab where username='$a' && password='$b'");
			if($d=mysqli_fetch_array($c))
			{
				$_SESSION['username']=$a;
				header("location:lab_test.php");
			}
			else
			{
				header("location:test1.php");
			}
			?>