			<?php
			session_start();
			$a=$_POST['id'];
			$b=$_POST['password'];
			include_once("connect.php");
			$c=mysqli_query($con,"select * from appointment where id='$a' && password='$b'");
			if($d=mysqli_fetch_array($c))
			{
				$_SESSION['id']=$a;
				header("location:user.php");
			}
			else
			{
				header("location:login.php");
			}
			?>