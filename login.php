<?php

	$con=mysqli_connect("localhost","root","","pankhuri");

	if($con==true)
	{
		echo "Connected";
		$email=$_POST['email'];
		$password=$_POST['password'];

		$query="select * from ProjectRegister where email='$email' and password='$password'";


		$run=mysqli_query($con,$query);
		if($run==true)
		{
			$data=mysqli_num_rows($run);

			if($data<1)
			{
				echo "Incorrect email id or password";
			}
			else
			{
				echo "You are logged in";
			}

		}
		else
		{
			echo "Error";
			die(mysqli_error($con));


		}


	}
	else
	{
		echo "Not connected";
		die(mysqli_error($con));
	}




?>