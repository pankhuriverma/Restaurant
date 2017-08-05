<?php

	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mobile=$_POST['mobile'];
		

	$con=mysqli_connect("localhost","root","","pankhuri");
	// print_r($_POST);
	if($con==true)
	{
		// echo "connected";
		$query="insert into ProjectRegister(name,email,password,mobile) values('".$name."','".$email."','".$password."','".$mobile."')";
		// echo $query;

		$query2="select * from ProjectRegister where email='$email'";
		
			

				$run2=mysqli_query($con,$query2);
				if($run2==true)
				{
					
					$data=mysqli_num_rows($run2);
					if($data>0)
					{
						echo "Enter another email id";

					}
					else
					{
					// echo "Login successful.";
						$run=mysqli_query($con,$query);
						if($run==true)
						{
							echo " Thank you.Data inserted successfully.";
						}
						else
						{
								echo "<br>Error";
								die(mysqli_error($con));
						}
					}
				}
			
		else
		{
			echo "Please enter the same email id";
		}


	}

	else
	{
		echo "Not connected";
	}

?>
