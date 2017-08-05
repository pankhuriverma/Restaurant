<?php 


include 'connect.php';



if($con==true)
{
	$query="select name from restaurant";
	$run=mysqli_query($con,$query);
		$res=$_POST['id'];

	while($data=mysqli_fetch_array($run))
	{


		if($res==$data)
		{
			echo"connection";
		}
		
	}
			
		
}
else
{
	echo "Error in connection";
}
















?>