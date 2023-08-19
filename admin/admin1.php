<?php
session_start();
			$a=$_POST['uname'];
			$b=$_POST['password'];
			$con=mysqli_connect("localhost","root","","online_clinic")or die(mysqli_error());
			$c=mysqli_query($con ,"select * from admin where uname='$a' && password='$b'");
			if($d=mysqli_fetch_array($c))
			{
				$_SESSION['uname']=$a;
				header("location:doc.php");
			}
			else
			{
				header("location:admin.php");
			}
			?>